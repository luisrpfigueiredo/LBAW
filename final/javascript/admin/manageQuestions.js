function loadDeleteModal(questionID){
    $('#confirmDeleteQuestionID').val(questionID);
}

function loadWarnModal(username) {
    var username = username;
    $.ajax({
        type: 'post',
        url: '../../api/mod/getWarnedInfo.php',
        data: {
            'username' : username
        },
        dataType: 'json',
        success: function(data){
            if(data['error'] != null){
                console.log(data['error']);
                return;
            }
            $('#warnUserID').html(data['ID']);
        },
        error: function(data){
            console.log(data['responseText']);
        }
    });

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
            $('#warnInfo').modal('hide');
        },
        error: function(data){
            console.log(data['responseText']);
        }
    });
}