<?= HTML::style("css/searchResults.css") ?>

<div class = "container">
    <?php render('breadcrumb') ?>

    <h1 class="results">Search results for: "<span class="search-string">JS</span>"</h1>

    <div class = "question-space">

        <?php
        for ($i = 0; $i < 10; $i++)
             render('question-info')
        ?>
    </div>

    <div class = "load-more col-sm-12 space-top text-center">
        <button type = "button" class = "btn btn-lg btn-primary col-sm-6 col-sm-offset-3 col-xs-12">Load More...</button>
    </div>

</div>