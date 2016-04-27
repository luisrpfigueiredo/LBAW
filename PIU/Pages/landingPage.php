<?= HTML::style("css/landing-page.css") ?>

<div class = "intro-header">
    <div class = "row" style="margin: 0 auto">
        <div class = "col-lg-12">
            <div class = "overlay"></div>
            <div class = "intro-message">
                <h1>Tidder</h1>
                <p>You ask, we answer!</p>
                <hr class = "intro-divider">
                <ul class = "list-inline intro-social-buttons">
                    <li>
                        <a href = "?page=about" class = "btn btn-warning btn-lg">
                            <span class = "network-name">About Us</span>
                        </a>
                    </li>
                    <li>
                        <a href = "?page=auth" class = "btn btn-success btn-lg">
                            <span class = "network-name">Join Us</span>
                        </a>
                    </li>
                    <li>
                        <a href = "https://fe.up.pt/" class = "btn btn-danger btn-lg" target = "_blank"><i class = "fa fa-twitter fa-fw"></i>
                            <span class = "network-name">@FEUP</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
<?php render('questions') ?>
</div>
