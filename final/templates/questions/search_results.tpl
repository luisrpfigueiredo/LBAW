{include file='common/header.tpl'}
<div class = "container">
    {include file='common/breadcrumb.tpl'}

    <h1 class = "results">Search results for: "<span class = "search-string">{$query}</span>"</h1>

    <div class = "question-space">
        {if count($questions) eq 0}
            No questions for your search query.
        {/if}
        {foreach $questions as $question}
            {include file='questions/partials/question_info.tpl'}
        {/foreach}
    </div>

    <div class = "load-more col-sm-12 space-top text-center">
        <button id = "load_more_questions" data-url = "{$BASE_URL}api/questions/search_load_more.php" type = "button" class = "btn btn-lg btn-primary col-sm-6 col-sm-offset-3 col-xs-12">Load More...</button>
    </div>

</div>

<script type = "text/javascript">
    $(document).ready(function () {
        var next_page = 1;
        $("#load_more_questions").on('click', function () {
            $.get($(this).data('url') + '?query={$query}&page=' + next_page, function (data) {
                addNewQuestions($.parseJSON(data));
                next_page++;
            });
        });
    });

    function addNewQuestions(objects) {
        $.each(objects, function (i, object) {
            var newObject = $('.question-info-container:last-child').clone(true);

            newObject.find('.vote-count').html(object.votes);
            newObject.find('.question-title').html(object.title);
            newObject.find('.question-body').html(object.body);
            updateSolvedStatus(newObject.find('.question-solved-status'), object.solved);
            newObject.find('.question-updated-at').html(object.updated_at);
            updateNumberAnswers(newObject.find('.question-answers'), object.number_answers);

            $('.question-space').append(newObject);
        });
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
</script>

{include file='common/footer.tpl'}
