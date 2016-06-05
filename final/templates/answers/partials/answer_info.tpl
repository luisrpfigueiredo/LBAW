<div class = "col-sm-12 container-white answer-info-container">

	<div class = "col-sm-2">
        {if $LOGGED_IN}
            {include file="questions/partials/vote_panel.tpl"}
        {else}
            {include file="questions/partials/show_count.tpl"}
        {/if}
    </div>

    <div class = "col-sm-10">
        <p class = "answer-description">
            <a href = "{answerUrl($answer['id'])}" class = "answer-body" class = "answer-title" data-base-answer-url="{answerUrl('')}">
                {$answer['body']}
            </a>
        </p>
    </div>

    <div class = "statistics col-sm-12 text-center">
        <span>
            <i class = "glyphicon glyphicon-user"></i>

            <a href = "{profileUrl($answer_username[$answer['id']])}" class = "question-body" class = "question-title" data-base-question-url="{profileUrl('')}">
                {$answer_username[$answer['id']]}
            </a>
        </span>
        <span>
            <i class = "glyphicon glyphicon-time"></i>
            <span class = "answer-updated-at">
                {if $answer['updated_at']}
                    {$answer['updated_at']}
                {else}
                    {$answer['created_at']}
                {/if}</span>
        </span>
    </div>
</div>