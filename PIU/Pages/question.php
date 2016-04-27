<?= HTML::style("css/voting.css"); ?>
<?= HTML::script("voting.js"); ?>
<div class = "container">
    <?php render('breadcrumb') ?>

    <div class = "panel panel-default">

        <!-- Default panel contents -->
        <div class = "panel-heading">
            <h3 class = "panel-title">Twitter bootstrap grid system. Spacing between columns</h3>
        </div>
        <div class = "panel-body question-details-panel no-padding-horizontal">

            <div class = "col-sm-12 container-white">
                <div class = "col-sm-1">
                    <?php render('vote') ?>
                </div>
                <div class = "col-sm-11">
                    <p class = "break-word">Im sure there is a simple solution to this problem. Basically if I have two columns how can i add a space between them.</p>


                    <div class = "statistics col-sm-12">
                        <span class = "text-danger">
                            <i class = "glyphicon glyphicon-remove"></i>
                            Not Solved
                        </span>
                        <span>
                            <i class = "glyphicon glyphicon-time"></i>
                            1 min ago
                        </span>
                        <span class = "text-star">
                            <i class = "glyphicon glyphicon-star"></i>
                            6 follows
                        </span>
                        <span>
                            <i class="glyphicon glyphicon-user"></i>
                            Gustavo Daniel
                        </span>
                    </div>

                    <?php importQuestionAction() ?>

                </div>
            </div>

            <?php render('question-answer') ?>

            <?php render('question-answer') ?>

            <?php render('question-answer') ?>

            <?php render('question-answer') ?>
        </div>

    </div>

    <div class = "col-sm-12 text-center">
        <button id = "singlebutton" name = "singlebutton" class = "btn btn-primary col-sm-6 col-sm-offset-3">Load More...</button>
    </div>
</div>
