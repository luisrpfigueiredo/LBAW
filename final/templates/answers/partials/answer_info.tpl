<div class = "col-sm-12 container-white answer-info-container">

    <div class = "col-sm-10">
        <p class = "answer-description">
            <a href = "{answerUrl($answer['id'])}" class = "answer-body" class = "answer-title" data-base-answer-url="{answerUrl('')}">
                {$answer['body']}
            </a>
        </p>
    </div>

    <div class = "statistics col-sm-12 text-center">
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