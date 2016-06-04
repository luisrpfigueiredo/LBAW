{include file='common/header.tpl'}
<!--{HTML::style("styles/admin/manageQuestions.css")}-->


<div class="container" xmlns:HTML="http://www.w3.org/1999/html">
    {include file='common/breadcrumb.tpl'}
    <div class="col-md-2"></div>
    <div class="col-md-3" text-center>
        <a id="overview" name="overviewButton" class="btn btn-primary" href="{url('pages/admin/overview')}">Overview</a>
    </div>
    <div class="col-md-3" text-center>
        <a id="manageUsers" name="manageUsersButton" class="btn btn-primary" href="{url('pages/admin/manageUsers')}">Manage Users</a>
    </div>
    <div class="col-md-3" text-center>
        <a id="manageAnswers" name="manageAnswersButton" class="btn btn-primary" href="#">Manage Answers</a>
    </div>
    <br><br><br>

    <div class = "collapse navbar-collapse" id = "bs-example-navbar-collapse-1">
        <ul class = "nav navbar-nav navbar-right">
            <form class = "navbar-form navbar-left" role = "search" method = "post" action = "{$BASE_URL}pages/admin/manageQuestions.php">
                <div class = "form-group">
                    <input type = "text" class = "form-control navbar-search" placeholder = "Search" name = "search_query">
                </div>
                <a>
                    <button type = "submit" class = "search-submit">
                        <span class = "glyphicon glyphicon-search"></span>
                    </button>
                </a>
            </form>
        </ul>
    </div>
    <div class = "question-space">
        {if count($questions) eq 0}
            No questions for your search query.
        {/if}
        {foreach $questions as $question}
            {include file='admin/questionInfoAdmin.tpl'}
        {/foreach}
    </div>
</div>

<div class="modal fade" id="deleteQuestion" role="dialog" tabindex="-1" aria-labelledby="deleteQuestion" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Confirm Deletion</h4>
            </div>
            <div class="modal-footer">
                <form action="{$BASE_URL}actions/admin/deleteQuestion.php" method="post">
                    <input type="hidden" name="questionID" id="confirmDeleteQuestionID">
                    <button type="submit" class="btn btn-primary"">Confirm</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>


{HTML::script("admin/manageQuestions.js")}
{include file='common/footer.tpl'}


