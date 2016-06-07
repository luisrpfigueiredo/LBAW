{include file='common/header.tpl'}
<div class = "container">
    {include file='common/breadcrumb.tpl'}

    <div class = "panel panel-default">
        <div class = "panel-heading">
            <h3 class = "panel-title">Edit Answer</h3>
        </div>
        <div class = "panel-body">
            <form class = "form-horizontal" method = "post" action = "{$BASE_URL}actions/answers/edit.php">

                <input type = "hidden" name = "answer_id" value = "{$answer['id']}">

                <div class = "form-group">
                    <div class = "col-sm-12 ">
                        <textarea id="answerBody" class = "form-control" rows = "5"  name = "body">{$answer['body']}</textarea>
                    </div>
                </div>

                <div class = "form-group">
                    <div class = "col-sm-12 text-center">
                        <button class = "btn btn-primary" type = "submit">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{include file='common/footer.tpl'}
