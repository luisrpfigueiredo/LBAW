<?= HTML::style("css/profile.css") ?>
<div class = "container">
    <?php render('breadcrumb'); ?>
    <div class = "row">
        <div class = "col-sm-4">
            <div class = "panel panel-default">
                <div class = "panel-heading">
                    <h3 class = "panel-title">JLopes</h3>
                </div>
                <div class = "panel-body small-padding-horizontal">
                    <div class = "row">
                        <div class = "col-sm-12 text-center">
                            <div class = "col-sm-12 user-statistics no-padding-horizontal">
                                <div class = "col-sm-4"><span>5</span>Questions</div>
                                <div class = "col-sm-4"><span>5</span>Answers</div>
                                <div class = "col-sm-4"><span>5</span>Rate</div>
                            </div>
                        </div>
                        <div class = "clearfix"></div>

                        <div class = "user-details">
                            <div class = "user-details-line col-sm-12">
                                <div class = "col-sm-4 text-right">
                                    Email:
                                </div>
                                <div class = "col-sm-8">
                                    <strong>jlopes@fe.up.pt</strong>
                                </div>
                            </div>

                            <div class = "user-details-line col-sm-12">
                                <div class = "col-sm-4 text-right">
                                    Username:
                                </div>
                                <div class = "col-sm-8">
                                    <strong>JLopes</strong>
                                </div>
                            </div>

                            <div class = "user-details-line col-sm-12">
                                <div class = "col-sm-4 text-right">
                                    Name:
                                </div>
                                <div class = "col-sm-8">
                                    <strong>João António Lopes</strong>
                                </div>
                            </div>

                            <div class = "user-details-line col-sm-12">
                                <p class = "small-padding-horizontal text-justify">
                                    João Correia Lopes is an Assistant Professor in Informatics Engineering at the Universidade do Porto and a researcher at INESC TEC.
                                </p>
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

                    <div class = "question-space">
                        <?php
                        for ($i = 0; $i < 3; $i++) {
                            render('question-info');
                        }
                        ?>
                    </div>



                    <div class = "load-more col-sm-12 space-top text-center">
                        <button type = "button" class = "btn btn-lg btn-primary col-sm-6 col-sm-offset-3 col-xs-12">Load More...</button>
                    </div>
                </div>
            </div>

        </div>

    </div>



