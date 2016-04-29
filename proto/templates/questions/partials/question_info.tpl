<div class = "col-sm-12 container-white">

    <div class = "col-sm-2">
        {include file="questions/partials/vote_panel.tpl"}
    </div>
    <div class = "col-sm-10">
        <h3>
            <a href = "{$BASE_URL}pages/dev.php">
                {$question['title']}
            </a>
        </h3>
        <p class = "question-description">
            <a href = "{$BASE_URL}pages/dev.php">
                {$question['body']}
            </a>
        </p>
    </div>

    <div class = "statistics col-sm-12 text-center">
        {if $question['solved']}
            <span class = "text-success">
                <i class = "glyphicon glyphicon-check"></i>
                    Solved
            </span>
        {else}
            <span class = "text-danger">
                <i class = "glyphicon glyphicon-check"></i>
                Not Solved
            </span>
        {/if}
        <span>
            <i class = "glyphicon glyphicon-time"></i>
            {$question['updated_at']}
        </span>
        <span>
            <i class = "glyphicon glyphicon-comment"></i>
            {$question['number_answers']} answer{if $question['number_answers'] != 1 }s{/if}
        </span>
    </div>
</div>