function loadModalInfo(userID) {
    $.ajax({
        type: 'post',
        url: '../../api/admin/getBanInfo.php',
        data: {
            'userID' : userID
        },
        dataType: 'json',
        success: function(data){
            if(data['error'] != null){
                console.log(data['responseText']);
                return;
            }
            updateModalInfo(userID, data['isBanned'], data["notes"]);
        },
        error: function(data){
            console.log(data['responseText']);
        }
    })
}

function updateModalInfo(userID, isBanned, notes){

    $("#modalUserID").html(userID);


    if(isBanned === "yes") {
        if(notes === "")
            notes = "No notes provided";
        $("#isBanned").html("User is currently banned");
        $("#banNotes").prop("disabled", true);
        $("#submitDecision").html("Unban");
    }
    else {
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

    var userID = parseInt($("#modalUserID").html());
    var notes = $("#banNotes").val();


    $.ajax({
        type: 'post',
        url: '../../api/admin/handleBan.php',
        data: {
            'isBanned': isBanned,
            'userID' : userID,
            'notes' : notes
        },
        dataType: 'json',
        success: function(data){
            if(data['error'] != null){
                console.log(data['responseText']);
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
    $('#ban' + userID).html(numberBans);
}