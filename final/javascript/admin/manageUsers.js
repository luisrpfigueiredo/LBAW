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
            return;
        }
    })
}

function updateModalInfo(userID, isBanned, notes){
    $("modalUserID").html(userID);
    $("isBanned").html(isBanned);
    $("banNotes").html(notes);
    if(isBanned === "yes")
        $("banNotes").attr('readonly','true');
    else
        $("banNotes").attr('readonly','false');
}

function banUnbanUser(isBanned, userID){
    $.ajax({
        type: 'post',
        url: '../../api/admin/handleBan.php',
        data: {
            'isBanned': isBanned,
            'userID' : userID
        },
        dataType: 'json',
        success: function(data){
            if(data['error'] != null){
                console.log(data['responseText']);
                return;
            }
            updateBannedNumber(userID, data["numberBans"]);
        },
        error: function(data){
            console.log(data['responseText']);
            return;
        }
    });
}

function updateBannedNumber(userID, numberBans){
    $('#ban' + userID).html(numberBans);
}