<!DOCTYPE html>
<html>
<head>
    <title>LBAW - Tidder</title>

    <meta charset = "UTF-8">
    <link rel = "shortcut icon" type = "image/png" href = "<?= resource('favicon.png') ?>"/>
    <link rel = "stylesheet" type = "text/css" href = "//fonts.googleapis.com/css?family=Open+Sans"/>


    {HTML::style('styles/bootstrap.min.css')}
    {HTML::style('styles/bootstrap-changes.css')}
    {HTML::style('styles/global-styles.css')}
    {HTML::style("styles/searchResults.css")}
    {HTML::style("styles/voting.css")}
    {HTML::style('styles/select2.min.css')}
    {HTML::style('styles/landing-page.css')}
    {HTML::style('styles/landing-page.css')}
    {HTML::style("styles/profile.css")}

    {HTML::script('jquery-2.2.1.min.js')}
    {HTML::script('bootstrap.min.js')}
    {HTML::script('select2.full.js')}

</head>
<body>
<nav class = "navbar navbar-default">
    <div class = "container">
        <div class = "container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class = "navbar-header">
                <button type = "button" class = "navbar-toggle collapsed" data-toggle = "collapse" data-target = "#bs-example-navbar-collapse-1" aria-expanded = "false">
                    <span class = "sr-only">Toggle navigation</span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                </button>
                <a class = "navbar-brand" href = "{$BASE_URL}" style = "padding: 2px 0">
                    <img src = "{resource("logo.png")}" height = "100%">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class = "collapse navbar-collapse" id = "bs-example-navbar-collapse-1">
                <ul class = "nav navbar-nav navbar-right">

                    {if $LOGGED_IN}
                        {include file='common/menu_logged_in.tpl'}
                    {else}
                        {include file='common/menu_logged_out.tpl'}
                    {/if}

                    <form class = "navbar-form navbar-left" role = "search" method = "post" action = "{$BASE_URL}pages/questions/search.php">
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
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </div>
</nav>