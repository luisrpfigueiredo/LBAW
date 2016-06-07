<div class = "col-sm-12 container-white question-info-container">

    <div class = "col-sm-2">
        {$votable_type = 'q'}
        {if $LOGGED_IN}
            {include file="questions/partials/vote_panel.tpl"}
        {else}

            {include file="questions/partials/show_count.tpl"}
        {/if}
    </div>
    <div class = "col-sm-10">
        <h3>
            <a href = "{questionUrl($question['id'])}" class="question-title" data-base-question-url="{questionUrl('')}">
                {$question['title']}
            </a>
        </h3>
        <p class = "question-description">
            <a href="{questionUrl($question['id'])}" class="question-body" data-base-question-url="{questionUrl('')}">
                {$question['body']}
            </a>
        </p>
    </div>

    <div class = "statistics col-sm-12 text-center">
        <span>
            <i class = "glyphicon glyphicon-user" alt=""></i>
             <a href = "{profileUrl($question['user_id'])}" class = "question-user" data-url="{profileUrl('')}">
                {$question['username']}
            </a>
        </span>
        {if $question['solved']}
            <span class = "text-success question-solved-status">
                <i class = "glyphicon glyphicon-check" alt=""></i>
                <span>Solved</span>
            </span>
        {else}
            <span class = "text-danger question-solved-status">
                <i class = "glyphicon glyphicon-check" alt=""></i>
                <span>Not Solved</span>
            </span>
        {/if}
        <span>
            <i class = "glyphicon glyphicon-time" alt=""></i>
            <span class = "question-updated-at">
                {if $question['updated_at']}
                    {$question['updated_at']}
                {else}
                    {$question['created_at']}
                {/if}
            </span>
        </span>
        <span>
            <i class = "glyphicon glyphicon-comment" alt=""></i>
            <span class = "question-answers">{$question['number_answers']} answer{if $question['number_answers'] != 1 }s{/if}</span>
        </span>
        {if  (intval($question['user_id']) == intval($session_id))}
            <div class = "col-sm-3 col-sm-offset-3 ">
                <button type = "button" class = "btn btn-primary" data-toggle = "modal" data-target = "#exampleModal" data-whatever = "@mdo">Edit</button>
            </div>
        {/if}
    </div>
</div>

<div class = "modal fade" id = "exampleModal" tabindex = "-1" role = "dialog" aria-labelledby = "exampleModalLabel">
    <div class = "modal-dialog" role = "document">
        <div class = "modal-content">
            <div class = "modal-header">
                <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
                    <span aria-hidden = "true">&times;</span></button>
                <h4 class = "modal-title" id = "exampleModalLabel">Edit Answer</h4>
            </div>
            <form action="{url('actions/answers/edit')}" method="post">
                <div class = "modal-body">
                    <div class = "form-group">
                        <textarea input type = "text" name="password" class = "form-control" id = "recipient-name" rows="6">{$question['body']} </textarea>
                    </div>
                </div>
                <div class = "modal-footer">
                    <button type = "button" class = "btn btn-default" data-dismiss = "modal">Close</button>
                    <button type = "submit" class = "btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
