{include file='common/header.tpl'}

<div class = "intro-header">
    <div class = "row" style = "margin: 0 auto">
        <div class = "col-lg-12">
            <div class = "overlay"></div>
            <div class = "intro-message">
                <h1>Tidder</h1>
                <p>You ask, we answer!</p>
                <hr class = "intro-divider">
                <ul class = "list-inline intro-social-buttons">
                    <li>
                        <a href = "{url('pages/about')}" class = "btn btn-warning btn-lg">
                            <span class = "network-name">About Us</span>
                        </a>
                    </li>
                    <li>
                        <a href = "{url('pages/register')}" class = "btn btn-success btn-lg">
                            <span class = "network-name">Join Us</span>
                        </a>
                    </li>
                    <li>
                        <a href = "http://fe.up.pt" class = "btn btn-danger btn-lg" target = "_blank"><i class = "fa fa-twitter fa-fw"></i>
                            <span class = "network-name">@FEUP</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class = "container">
    {include file='questions_tabs_partials/menu.tpl'}

    <div class = "tab-content" style = "margin-top: 1em;">
        {foreach $questionsArray as $key=>$questions}
            {if $key == 0}
                {assign panelActive "active"}
            {else}
                {assign panelActive ""}
            {/if}

            {include file='questions_tabs_partials/question_list.tpl' tabName=$tabs[$key][0] questions=$questions}
        {/foreach}
    </div>
</div>

<script type = "text/javascript">
    $(document).ready(function () {
        $(".load-more").on('click', function () {
            var next_page = $(this).data('next-page');
            var tab = $(this).data('tab');

            $.get($(this).data('url') + '?tab=' + tab + '&page=' + next_page, function (data) {
                addNewQuestions($.parseJSON(data));
            });
            $(this).data('next-page', parseInt(next_page) + 1);
        });
    });

    function addNewQuestions(objects) {
        var chunks = arrayChunk(objects, 2);

        $.each(chunks, function (j, chunk) {
            var lastItem = $('div.active[role="tabpanel"] .question-line:last');
            var newLine = lastItem.clone(true);
            $.each(chunk, function (i, object) {
                var newObject = newLine.find('.question-col:eq(' + i + ')');
                newObject.find('.vote-count').html(object.votes);
                updateTitleAndLink(newObject.find('.question-title'), object);
                updateTitleAndLink(newObject.find('.question-body'), object);
                updateSolvedStatus(newObject.find('.question-solved-status'), object.solved);
                updateDate(newObject.find('.question-updated-at'), object);
                updateNumberAnswers(newObject.find('.question-answers'), object.number_answers);
            });

            lastItem.after(newLine);
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

    function arrayChunk(array, size) {
        //declare vars
        var output = [];
        var i = 0; //the loop counter
        var n = 0; //the index of array chunks

        for (var item in array) {

            //if i is > size, iterate n and reset i to 0
            if (i >= size) {
                i = 0;
                n++;
            }

            //set a value for the array key if it's not already set
            if (!output[n] || output[n] == 'undefined') {
                output[n] = [];
            }

            output[n][i] = array[item];

            i++;

        }

        return output;

    }
    ;
</script>


{include file='common/footer.tpl'}
