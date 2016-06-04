{include file='common/header.tpl'}


<div class = "container">
    {include file='common/breadcrumb.tpl'}
    <div class="col-md-2"></div>
    <div class="col-md-3" text-center>
        <a id="manageUsers" name="manageUsersButton" class="btn btn-primary" href="{url('pages/admin/manageUsers')}">Manage Users</a>
    </div>
    <div class="col-md-3" text-center>
        <a id="manageQuestions" name="manageQuestionsButton" class="btn btn-primary" href="#">Manage Questions</a>
    </div>
    <div class="col-md-3" text-center>
        <a id="manageAnswers" name="manageAnswersButton" class="btn btn-primary" href="#">Manage Answers</a>
    </div>
    <br><br><br>

    <h2>Site Statistics</h2>
    <table class="table table-bordered table-responsive table-compact">
        <tbody>
        <tr>
            <td>Users</td>
            <td>{$statistics['users']}</td>
        </tr>
        <tr>
            <td style="background-color: lightgray">Total Mods</td>
            <td style="background-color: lightgray">{$statistics['mods']}</td>
        </tr>
        <tr>
            <td>Total Admins</td>
            <td>{$statistics['admins']}</td>
        </tr>
        <tr>
            <td style="background-color: lightgray">Total Questions</td>
            <td style="background-color: lightgray">{$statistics['questions']}</td>
        </tr>
        <tr>
            <td>Total Answers</td>
            <td>{$statistics['answers']}</td>
        </tr>
        <tr>
            <td style="background-color: lightgray">Total Posts</td>
            <td style="background-color: lightgray">{$statistics['questions'] + $statistics['answers']}</td>
        </tr>
        <tr>
            <td>Total Votes</td>
            <td>{$statistics['votes']}</td>
        </tr>
        <tr>
            <td style="background-color: lightgray">Total Follows</td>
            <td style="background-color: lightgray">{$statistics['follows']}</td>
        </tr>
        <tr>
            <td>Total Bans</td>
            <td>{$statistics['bans']}</td>
        </tr>
        <tr>
            <td style="background-color: lightgray">Total Warnings</td>
            <td style="background-color: lightgray">{$statistics['warnings']}</td>
        </tr>
        </tbody>
    </table>


</div>

{include file='common/footer.tpl'}






