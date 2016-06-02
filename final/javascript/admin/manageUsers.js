function banUnbanUser(userID){
    $.ajax({
        type: 'post',
        url: '../../api/admin/handleBan.php',
        data: {
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