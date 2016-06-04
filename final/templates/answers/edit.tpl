{include file='common/header.tpl'}
<div class = "container">
    {include file='common/breadcrumb.tpl'}

    <div class = "panel panel-default">
        <div class = "panel-heading">
            <h3 class = "panel-title">Ask Question</h3>
        </div>
        <div class = "panel-body">
            <form class = "form-horizontal" method = "post" action = "{$BASE_URL}actions/questions/edit.php">

                <input type = "hidden" name = "question_id" value = "{$question['id']}">
                {include file='questions/partials/question_form.tpl'}

                <div class = "form-group">
                    <div class = "col-sm-3 col-sm-offset-3">
                        <button class = "btn btn-primary" type = "submit">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{include file='common/footer.tpl'}
