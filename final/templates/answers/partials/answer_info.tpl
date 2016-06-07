<div class = "col-sm-11 container-white answer-info-container  pull-right sizeSelector">
    <div class = "col-sm-2">
        {$votable_type='a'}
        {if $LOGGED_IN}
            {include file="answers/partials/answer_vote_panel.tpl"}
        {else}

            {include file="questions/partials/show_count.tpl"}
        {/if}
    </div>

    <div class = "col-sm-10">
        <p class = "answer-description">
            {$answer['body']}
        </p>
    </div>

    <div class = "statistics col-sm-12 text-center">
        <span>
            <i class = "glyphicon glyphicon-user"></i>
            <a href = "{profileUrl($answer['user_id'])}" class = "question-body question-title"">
                {$answer['username']}
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
        <!--{if  (intval($answer['user_id']) == intval($session_id))}
            <form class = "form-horizontal" method="post" action = "{$BASE_URL}actions/answers/edit.php">
                <div class = "col-sm-3 col-sm-offset-3 ">
                    <button class = "btn btn-primary " type = "submit">Edit</button>
                </div>
            </form>

        {/if}-->

    </div>
</div>