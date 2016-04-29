{include file='common/header.tpl'}
<div class = "container">
    {include file='common/breadcrumb.tpl'}

    <h1 class = "results">Search results for: "<span class = "search-string">{$query}</span>"</h1>

    <div class = "question-space">
        {if count($questions) eq 0}
            No questions for your search query.
        {/if}
        {foreach $questions as $question}
            {include file='questions/partials/question_info.tpl'}
        {/foreach}
    </div>

    <div class = "load-more col-sm-12 space-top text-center">
        <button disabled type = "button" class = "btn btn-lg btn-primary col-sm-6 col-sm-offset-3 col-xs-12">Load More...</button>
    </div>

</div>

{include file='common/footer.tpl'}
