function loadBanModal(userID) {
    $.ajax({
        type: 'post',
        url: '../../api/admin/getBanInfo.php',
        data: {
            'userID' : userID
        },
        dataType: 'json',
        success: function(data){
            if(data['error'] != null){
                console.log(data['error']);
                return;
            }
            updateBanModal(userID, data['isBanned'], data["notes"]);
        },
        error: function(data){
            console.log(data['responseText']);
        }
    })
}

function updateBanModal(userID, isBanned, notes){
    $("#banUserID").html(userID);

    if(isBanned === "yes") {
        if(notes === "")
            notes = "No notes provided";
        $("#banExpirationDiv").hide();
        $("#banExpirationDate").prop("disabled", true);
        $("#isBanned").html("User is currently banned");
        $("#banNotes").prop("disabled", true);
        $("#submitDecision").html("Unban");
    }
    else {
        $("#banExpirationDiv").show();
        $("#banExpirationDate").prop("disabled", false);
        $("#isBanned").html("User is currently not banned");
        $("#banNotes").prop("disabled", false);
        $("#submitDecision").html("Ban");
    }

    $("#banNotes").val(notes);

}

function banUnbanUser(){
    var isBanned;
    if($("#isBanned").html() === "User is currently banned")
        isBanned = "yes";
    else
        isBanned = "no";

    var userID = parseInt($("#banUserID").html());
    var notes = $("#banNotes").val();
    var expirationDateInput = $("#banExpirationDate").val();

    var expirationDate = new Date(expirationDateInput).getTime()/1000;

    $.ajax({
        type: 'post',
        url: '../../api/admin/handleBan.php',
        data: {
            'isBanned': isBanned,
            'userID' : userID,
            'notes' : notes,
            'expirationDate' : expirationDate
        },
        dataType: 'json',
        success: function(data){
            if(data['error'] != null){
                console.log(data['error']);
                return;
            }
            updateBannedNumber(userID, data["numberBans"]);
            $('#banInfo').modal('hide');
        },
        error: function(data){
            console.log(data['responseText']);
        }
    });
}

function updateBannedNumber(userID, numberBans){
    $('#' + userID + " :nth-child(4)").html(numberBans);
}


function loadUpDownModal(userID) {
    $('#confirmUpDownUserID').html(userID);
}

function upgradeDowngradeUser() {
    var userID = $('#confirmUpDownUserID').html();
    $.ajax({
        type: 'post',
        url: '../../api/admin/handleUpDown.php',
        data: {
            'userID': userID
        },
        dataType: 'json',
        success: function (data) {
            if (data['error'] != null) {
                console.log(data['error']);
                return;
            }
            updatePermissionLevel(userID, data['userType']);
            $('#confirmUpDown').modal('hide');

        },
        error: function (data) {
            console.log(data['responseText']);
        }
    });
}

function updatePermissionLevel(userID, newType){
    $('#' + userID + ' :nth-child(2)').html(newType);
}

function loadMoreInfoModal(userID) {
    $.ajax({
        type: 'post',
        url: '../../api/admin/getMoreInfo.php',
        data: {
            'userID' : userID
        },
        dataType: 'json',
        success: function(data){
            if(data['error'] != null){
                console.log(data['error']);
                return;
            }
            updateMoreInfoModal(data);
        },
        error: function(data){
            console.log(data['responseText']);
        }
    })
}

function updateMoreInfoModal(data) {
    if(data['bannedUntil'] === "")
        data['bannedUntil'] = "Not banned";

    $('#moreInfoUsername').html("Username: " + data['username']);
    $('#moreInfoIsBannedUntil').html("Banned until: " + data['bannedUntil']);
    $('#moreInfoNumberQuestions').html("Number of questions: " + data['numberQuestions']);
    $('#moreInfoNumberAnswers').html("Number of answers: " + data['numberAnswers']);
}


function loadWarnModal(userID) {
    $('#warnUserID').html(userID);
}

function warnUser(){
    var userID = parseInt($('#warnUserID').html());
    var notes = $("#warnNotes").val();

    $.ajax({
        type: 'post',
        url: '../../api/mod/handleWarning.php',
        data: {
            'userID' : userID,
            'notes' : notes
        },
        dataType: 'json',
        success: function(data){
            if(data['error'] != null){
                console.log(data['error']);
                return;
            }
            updateWarningCount(userID, data["numberWarnings"]);
            $('#warnInfo').modal('hide');
        },
        error: function(data){
            console.log(data['responseText']);
        }
    });
}

function updateWarningCount(userID, numberWarnings) {
    $('#' + userID + ' :nth-child(3)').html(numberWarnings);
}