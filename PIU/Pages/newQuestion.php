<div class = "container">
    <?php render('breadcrumb') ?>

    <div class = "panel panel-default">
        <div class = "panel-heading">
            <h3 class = "panel-title">Ask Question</h3>
        </div>
        <div class = "panel-body">
            <form class = "form-horizontal">

                <div class = "form-group">
                    <label for = "title" class = "col-sm-3 control-label">Title</label>
                    <div class = "col-sm-8">
                        <input type = "text" name = "title" class = "form-control" placeholder = "Title" required = "" autocomplete = "off">
                    </div>
                </div>

                <div class = "form-group">
                    <label for = "username" class = "col-sm-3 control-label">Description</label>
                    <div class = "col-sm-8">
                        <textarea class="form-control" rows="5"></textarea>
                    </div>
                </div>


                <div class = "form-group">
                    <label for = "title" class = "col-sm-3 control-label">Tags</label>
                    <div class = "col-sm-8">
                        <input type = "text" name = "title" class = "form-control" placeholder = "Tags" required = "" autocomplete = "off">
                    </div>
                </div>

                <div class = "form-group">
                    <div class = "col-sm-3 col-sm-offset-3">
                        <a href = "?page=question">
                            <button class = "btn btn-primary" type = "button">Publish</button>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>