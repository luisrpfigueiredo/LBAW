$(document).ready(function() {
    $(".increment.up").on('click', function() {
        var voteType = $(this).parent().data('type');
        var voteId = $(this).parent().data('id');

        $.get($(this).data('url') + '?query={$query}&page=' + next_page, function (data) {
            
        });
        $(this).addClass('active');
    });

    $(".increment.down").on('click', function() {
        var voteType = $(this).parent().data('type');
        var voteId = $(this).parent().data('id');

        $(this).addClass('active');
    });
});
