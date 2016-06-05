function loadDeleteModal(questionID){
    $('#confirmDeleteQuestionID').val(questionID);
}

function loadWarnModal(username) {
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
            $('#warnUserID').html(data['id']);
        },
        error: function(data){
            console.log(data['responseText']);
        }
    });

}

function warnUser(){
    var userID = parseInt($('#warnUserID').html());
    var notes = $("#warnNotes").val();

    if(notes == null)
        notes = "No notes provided";
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
            appendSuccessMessage();
        },
        error: function(data){
            console.log(data['responseText']);
        }
    });
}