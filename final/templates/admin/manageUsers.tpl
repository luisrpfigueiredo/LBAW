{include file='common/header.tpl'}

<div class="container" xmlns:HTML="http://www.w3.org/1999/html">
    {include file='common/breadcrumb.tpl'}
    <div class="col-md-2"></div>
    <div class="col-md-3" text-center>
        <a id="manageUsers" name="manageUsersButton" class="btn btn-primary" href="{url('pages/admin/overview')}">Overview</a>
    </div>
    <div class="col-md-3" text-center>
        <a id="manageQuestions" name="manageQuestionsButton" class="btn btn-primary" href="#">Manage Questions</a>
    </div>
    <div class="col-md-3" text-center>
        <a id="manageAnswers" name="manageAnswersButton" class="btn btn-primary" href="#">Manage Answers</a>
    </div>
    <br><br><br>

    <h2>Search Users</h2>
    <table class="table table-bordered table-responsive table-compact">
        <tbody>
        <th>Username</th>
        <th>Permission Level</th>
        <th>Warnings</th>
        <th>Bans</th>
        <th>Email</th>
        {foreach $usersIDs as $userID}
            <tr id={$userID["id"]}>
                <td>{$userPersonalInfos[$userID["id"]]["username"]}</td>
                <td>{$userPersonalInfos[$userID["id"]]["type"]}</td>
                <td id="warn{$userID['id']}">{$userWarningCounts[$userID["id"]]["warnings"]}</td>
                <td id="ban{$userID['id']}">{$userBanCounts[$userID["id"]]["bans"]}</td>
                <td>{$userPersonalInfos[$userID["id"]]["email"]}</td>
                <td><button id="info".{$userID["id"]} class="btn-primary" onClick="" >More Info</button></td>
                {if $userPersonalInfos[$userID["id"]]["type"] == "admin"}
                    {continue}
                {/if}

                <td><button class="btn-primary" onClick="banUnbanUser({$userID["id"]})" >Ban/Unban</button></td>
                <td><button class="btn-primary" onClick="" >Upgrade/Downgrade</button></td>

            </tr>
        {/foreach}
        </tbody>
    </table>

</div>


{HTML::script("admin/manageUsers.js")}

{include file='common/footer.tpl'}





