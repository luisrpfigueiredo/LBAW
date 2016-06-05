/**
 * Created by Luís on 05/06/2016.
 */
$(document).ready(function(){
    setCorrectSize();
});

function loadDeleteModal(answerID){
    $('#confirmDeleteAnswerID').val(answerID);
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

function setCorrectSize(){
    console.log("Called");
    $('.sizeSelector').removeClass("col-sm-11").addClass("col-sm-12");
    $('.sizeSelector').removeClass("pull-right");
}