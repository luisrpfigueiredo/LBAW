function banUnbanUser(userID){
    console.log("hi baby: " + userID);
    $.ajax({
        type: 'POST',
        url: '../../api/admin/handleBan.php',
        userID: userID,
        dataType: 'json',
        success: function(data){
            console.log(" was called");
            if(data['error'] != null){
                //shit happened
                return;
            }
            updateBannedNumber(data["numberBans"]);
        },
        fail: function(data){
            console.log("derp derp");
            console.log(data);
            return;
        }
    });
}

function updateBannedNumber(numberBans){
    console.log("hello world: Number bans: " + numberBans);
}