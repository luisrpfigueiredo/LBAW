{include file='common/header.tpl'}
{HTML::style("styles/admin/manageUsers.css")}


<div class="container" xmlns:HTML="http://www.w3.org/1999/html">
    {include file='common/breadcrumb.tpl'}
    <div class="col-md-2"></div>
    <div class="col-md-3" text-center>
        <a id="overview" name="overviewButton" class="btn btn-primary" href="{url('pages/admin/overview')}">Overview</a>
    </div>
    <div class="col-md-3" text-center>
        <a id="manageQuestions" name="manageQuestionsButton" class="btn btn-primary" href="{url('pages/admin/manageQuestions')}">Manage Questions</a>
    </div>
    <div class="col-md-3" text-center>
        <a id="manageAnswers" name="manageAnswersButton" class="btn btn-primary" href="#">Manage Answers</a>
    </div>
    <br><br><br>

    <div class = "collapse navbar-collapse" id = "bs-example-navbar-collapse-1">
        <ul class = "nav navbar-nav navbar-right">
            <form class = "navbar-form navbar-left" role = "search" method = "post" action = "{$BASE_URL}pages/admin/manageUsers.php">
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

    <h2>Search Users: {$query}</h2>
    <table class="table table-bordered table-responsive table-compact table-collapsing">
        <tbody>
        <th>Username</th>
        <th>Permission Level</th>
        <th>Warnings</th>
        <th>Bans</th>
        <th>Email</th>
        <th class="cell-borderless"></th>
        <th class="cell-borderless"></th>
        <th class="cell-borderless"></th>
        {foreach $usersIDs as $userID}
            <tr id={$userID["id"]}>
                <td>{$userPersonalInfos[$userID["id"]]["username"]}</td>
                <td>{$userPersonalInfos[$userID["id"]]["type"]}</td>
                <td>{$userWarningCounts[$userID["id"]]}</td>
                <td>{$userBanCounts[$userID["id"]]}</td>
                <td>{$userPersonalInfos[$userID["id"]]["email"]}</td>

                <td class="cell-borderless" >
                    <button class="btn-primary" onClick="loadMoreInfoModal({$userID['id']})" data-toggle="modal" data-target="#moreInfo" >More Info</button>
                </td>

                {if ($userPersonalInfos[$userID["id"]]["type"] == "admin") || ($userPersonalInfos[$userID["id"]]["username"] == $USERNAME)}
                    <td class="cell-borderless"></td>
                    <td class="cell-borderless"></td>
                    <td class="cell-borderless"></td>
                    {continue}
                {/if}

                <td class="cell-borderless">
                    <button class="btn-primary" onClick="loadBanModal({$userID['id']})" data-toggle="modal" data-target="#banInfo" >Ban/Unban</button>
                </td>
                <td class="cell-borderless">
                    <button class="btn-primary" onClick="loadWarnModal({$userID['id']})" data-toggle="modal" data-target="#warnInfo" >Warn User</button>
                </td>
                <td class="cell-borderless">
                    <button class="btn-primary" onClick="loadUpDownModal({$userID['id']})" data-toggle="modal" data-target="#confirmUpDown">Upgrade/Downgrade</button>
                </td>

            </tr>
        {/foreach}
        </tbody>
    </table>

</div>


<div class="modal fade" id="moreInfo" role="dialog" tabindex="-1" aria-labelledby="moreInfo" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" >More Info</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label id="moreInfoUsername" class="col-sm-12 control-label "></label>
                    </div>
                    <div class="form-group">
                        <label id="moreInfoIsBannedUntil" class="col-sm-12 control-label"></label>
                    </div>
                    <div class="form-group">
                        <label id="moreInfoNumberQuestions" class="col-sm-12 control-label"></label>
                    </div>
                    <div class="form-group">
                        <label id="moreInfoNumberAnswers" class="col-sm-12 control-label"></label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <span id="moreInfoUserID" class="hide"></span>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="banInfo" role="dialog" tabindex="-1" aria-labelledby="banInfo" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ban Info</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <span id="banUserID" class="hide"></span>
                    <div class="form-group">
                        <label id="isBanned" class="col-sm-12 control-label"></label>
                    </div>
                    <div class="form-group">
                        <label for="banNotes" class="col-sm-12 control-label">Notes</label>
                        <div class="col-sm-12">
                            <textarea id="banNotes" class="form-control modal-textarea"></textarea>
                        </div>
                    </div>
                    <div class="form-group" id="banExpirationDiv">
                        <label for="banExpirationDate" class="col-sm-12 control-label">Ban Expiration Date</label>
                        <div class="col-sm-12">
                            <input id="banExpirationDate" type="datetime-local">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button id="submitDecision" type="button" class="btn btn-primary pull-left" onclick="banUnbanUser()"></button>
                <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="warnInfo" role="dialog" tabindex="-1" aria-labelledby="warnInfo" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Warning Info</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <span id="warnUserID" class="hide"></span>
                    <div class="form-group">
                        <label for="warnNotes" class="col-sm-12 control-label">Notes</label>
                        <div class="col-sm-12">
                            <textarea id="warnNotes" class="form-control modal-textarea"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary pull-left" onclick="warnUser()">Warn User</button>
                <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="confirmUpDown" role="dialog" tabindex="-1" aria-labelledby="confirmUpDown" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Confirm Permission Change</h4>
            </div>
            <div class="modal-footer">
                <span id="confirmUpDownUserID" class="hide"></span>
                <button type="button" class="btn btn-primary" onclick="upgradeDowngradeUser()">Confirm</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


{HTML::script("admin/manageUsers.js")}

{include file='common/footer.tpl'}





