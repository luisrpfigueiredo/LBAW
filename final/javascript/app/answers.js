$(document).ready(function () {
    $("body").on('click', '.edit-answer', function () {
        var url = $(this).data('url');
        var id = $(this).closest('.answer-info-container').data('id');

        window.location.href = url + id;
    });
});
