$(document).ready(function () {
    var next_page = 1;
    $(".load-more").on('click', function () {
        $.get($(this).data('url') + '?user_id=' + $(this).data('user-id') + '&page=' + next_page, function (data) {
                addNewQuestions($.parseJSON(data));
                next_page++;
            }
        )
        ;
    });

    $("#follow").on('click', function () {
        $.get($(this).data('url'), function (data) {
            data = JSON.parse(data);

            if (data.following)
                $("#follow").html("Unfollow");
            else
                $("#follow").html("Follow");
        });
    });
});

function addNewQuestions(objects) {
    $.each(objects, function (i, object) {
        var newObject = $('.question-info-container:last-child').clone(true);

        newObject.find('.vote-count').html(object.votes);
        updateTitleAndLink(newObject.find('.question-title'), object);
        updateTitleAndLink(newObject.find('.question-body'), object);
        updateSolvedStatus(newObject.find('.question-solved-status'), object.solved);
        updateDate(newObject.find('.question-updated-at'), object);
        updateNumberAnswers(newObject.find('.question-answers'), object.number_answers);

        $('.question-space').append(newObject);
    });
}

function updateTitleAndLink(questionTitle, object) {
    questionTitle.attr('href', questionTitle.data('base-question-url') + object.id);
    questionTitle.html(object.title);
}

function updateBodyAndLink(questionTitle, object) {
    questionTitle.attr('href', questionTitle.data('base-question-url') + object.id);
    questionTitle.html(object.body);
}

function updateSolvedStatus(solvedObject, solved) {
    solvedObject.removeClass('text-success text-danger').addClass(solved ? 'text-success' : 'text-danger');
    solvedObject.find('span').html(solved ? 'Solved' : 'Not Solved');
}

function updateNumberAnswers(questionAnswers, number) {
    var answer = number + ' answer';
    if (number != 1) answer += 's';
    questionAnswers.html(answer);
}

function updateDate(questionDate, object) {
    if (object.updated_at === null || object.updated_at == '')
        questionDate.html(object.created_at);
    else
        questionDate.html(object.updated_at);
}