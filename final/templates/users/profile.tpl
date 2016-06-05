{include file='common/header.tpl'}
<div class = "container">
    {include file='common/breadcrumb.tpl'}
    <div class = "row">
        <div class = "col-sm-4">
            <div class = "panel panel-default">
                <div class = "panel-heading">
                    <h3 class = "panel-title">{$user['username']}</h3>
                </div>
                <div class = "panel-body small-padding-horizontal">
                    <div class = "row">
                        <div class = "col-sm-12 text-center">
                            <div class = "col-sm-12 user-statistics no-padding-horizontal">
                                <div class = "col-sm-4"><span>{$user['count_questions']}</span>Questions</div>
                                <div class = "col-sm-4"><span>{$user['count_answers']}</span>Answers</div>
                                <div class = "col-sm-4"><span>{$user['count_votes_rating_received']}</span>Rate</div>
                            </div>
                        </div>
                        <div class = "clearfix"></div>

                        <div class = "user-details">
                            <div class = "user-details-line col-sm-12">
                                <div class = "col-sm-4 text-right">
                                    Email:
                                </div>
                                <div class = "col-sm-8">
                                    <strong>{$user['email']}</strong>
                                </div>
                            </div>

                            <div class = "user-details-line col-sm-12">
                                <div class = "col-sm-4 text-right">
                                    Username:
                                </div>
                                <div class = "col-sm-8">
                                    <strong>{$user['username']}</strong>
                                </div>
                            </div>

                            <div class = "user-details-line col-sm-12">
                                <div class = "col-sm-4 text-right">
                                    Joined at:
                                </div>
                                <div class = "col-sm-8">
                                    <strong>{$user['created_at']}</strong>
                                </div>
                            </div>

                            <div class = "user-details-line col-sm-12 text-center">
                                <button type = "button" class = "btn btn-primary" data-toggle = "modal" data-target = "#exampleModal" data-whatever = "@mdo">Edit profile</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class = "col-sm-8">

            <div class = "panel panel-default">
                <div class = "panel-heading">
                    <h3 class = "panel-title">My Questions</h3>
                </div>
                <div class = "panel-body profile-questions-panel">
                    {if !empty($questions)}
                    <div class = "question-space">

                        {foreach $questions as $question}
                            {include file='questions/partials/question_info.tpl'}
                        {/foreach}

                    </div>


                    <div class = "load-more col-sm-12 space-top text-center" data-user="{$user['id']}" data-url="{url('api/questions/profile_load_more')}" data-user-id="{$user['id']}">
                        <button type = "button" class = "btn btn-lg btn-primary col-sm-6 col-sm-offset-3 col-xs-12">Load More...</button>
                    </div>
                    {else}<div class="text-center">
                        No Questions Found!
                    </div>
                    {/if}
                </div>
            </div>

        </div>

    </div>



    <div class = "modal fade" id = "exampleModal" tabindex = "-1" role = "dialog" aria-labelledby = "exampleModalLabel">
        <div class = "modal-dialog" role = "document">
            <div class = "modal-content">
                <div class = "modal-header">
                    <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
                        <span aria-hidden = "true">&times;</span></button>
                    <h4 class = "modal-title" id = "exampleModalLabel">Settings</h4>
                </div>
                <div class = "modal-body">
                    <form>
                        <div class = "form-group">
                            <label for = "recipient-name" class = "control-label">New Username:</label>
                            <input type = "text" class = "form-control" id = "recipient-name">
                        </div>
                        <div class = "form-group">
                            <label for = "message-text" class = "control-label">New email:</label>
                            <input type = "text" class = "form-control" id = "recipient-name">
                        </div>
                        <div class = "form-group">
                            <label for = "message-text" class = "control-label">New password:</label>
                            <input type = "text" class = "form-control" id = "recipient-name">
                        </div>
                        <div class = "form-group">
                            <label for = "message-text" class = "control-label">Confirm password:</label>
                            <input type = "text" class = "form-control" id = "recipient-name">
                        </div>
                    </form>
                </div>
                <div class = "modal-footer">
                    <button type = "button" class = "btn btn-default" data-dismiss = "modal">Close</button>
                    <button type = "button" class = "btn btn-primary">Edit</button>
                </div>
            </div>
        </div>
    </div>
</div>

{HTML::script('app/userProfile.js')}

{include file='common/footer.tpl'}
