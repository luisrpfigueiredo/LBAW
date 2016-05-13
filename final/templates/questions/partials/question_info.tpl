<div class = "col-sm-12 container-white question-info-container">

    <div class = "col-sm-2">
        {include file="questions/partials/vote_panel.tpl"}
    </div>
    <div class = "col-sm-10">
        <h3>
            <a href = "{$BASE_URL}pages/dev.php" class="question-title">
                {$question['title']}
            </a>
        </h3>
        <p class = "question-description">
            <a href = "{$BASE_URL}pages/dev.php" class="question-body">
                {$question['body']}
            </a>
        </p>
    </div>

    <div class = "statistics col-sm-12 text-center">
        {if $question['solved']}
            <span class = "text-success question-solved-status">
                <i class = "glyphicon glyphicon-check"></i>
                <span>Solved</span>
            </span>
        {else}
            <span class = "text-danger question-solved-status">
                <i class = "glyphicon glyphicon-check"></i>
                <span>Not Solved</span>
            </span>
        {/if}
        <span>
            <i class = "glyphicon glyphicon-time"></i>
            <span class="question-updated-at">{$question['updated_at']}</span>
        </span>
        <span>
            <i class = "glyphicon glyphicon-comment"></i>
            <span class="question-answers">{$question['number_answers']} answer{if $question['number_answers'] != 1 }s{/if}</span>
        </span>
    </div>
</div>