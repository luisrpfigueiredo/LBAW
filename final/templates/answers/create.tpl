<div class = "container">
    <div class = "panel panel-default">
        <div class = "panel-heading">
            <h3 class = "panel-title">Respond</h3>
        </div>
        <div class = "panel-body">
            <form class = "form-horizontal" method="post" action = "{$BASE_URL}actions/answers/create.php">

                {include file='answers/partials/answer_form.tpl'}

                <div class = "form-group">
                    <div class = "col-sm-3 col-sm-offset-3">
                        <button class = "btn btn-primary" type = "submit">Answer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{include file='common/footer.tpl'}
