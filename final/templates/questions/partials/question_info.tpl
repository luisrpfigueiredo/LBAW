<div class = "col-sm-12 container-white question-info-container" data-id="{$question['id']}">

    <div class = "col-sm-2">
        {$votable_type='q'}
        {if $LOGGED_IN}
            {include file="questions/partials/question_vote_panel.tpl"}
        {else}
            {include file="questions/partials/show_count.tpl"}
        {/if}
    </div>
    <div class = "col-sm-10">
        <h3>
            <a href = "{questionUrl($question['id'])}" class = "question-title" data-base-question-url = "{questionUrl('')}">
                {$question['title']}
            </a>
        </h3>
        <p class = "question-description">
            <a href = "{questionUrl($question['id'])}" class = "question-body" data-base-question-url = "{questionUrl('')}">
                {nl2br($question['body'])}
            </a>
        </p>
        <div class = "options pull-right{if !$question['isMine']} hidden{/if}" style = "margin-bottom:5px;">
            <button class = "btn btn-primary btn-xs edit-question" data-url = "{editQuestionUrl('')}">Edit</button>
            <button class = "btn btn-success btn-xs trigger-question-solved{if $question['solved']} hidden{/if}"
            data-url="{questionSolvedUrl('')}">Mark as solved</button>
        </div>
    </div>

    <div class = "statistics col-sm-12 text-center">
        <span>
            <i class = "glyphicon glyphicon-user"></i>
             <a href = "{profileUrl($question['user_id'])}" class = "question-user" data-url = "{profileUrl('')}">
                {$question['username']}
            </a>
        </span>
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
            <span class = "question-updated-at">
                {if $question['updated_at']}
                    {$question['updated_at']}
                {else}
                    {$question['created_at']}
                {/if}
            </span>
        </span>
        <span>
            <i class = "glyphicon glyphicon-comment"></i>
            <span class = "question-answers">{$question['number_answers']} answer{if $question['number_answers'] != 1 }s{/if}</span>
        </span>
    </div>
</div>
