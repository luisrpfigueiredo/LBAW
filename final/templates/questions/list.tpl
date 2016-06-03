{include file='common/header.tpl'}

<div class = "container">
    {include file="common/breadcrumb.tpl"}

    {include file='questions_tabs_partials/menu.tpl'}

    <div class = "tab-content" style = "margin-top: 1em;">
        {foreach $questionsArray as $key=>$questions}
            {if $key == 0}
                {assign panelActive "active"}
            {else}
                {assign panelActive ""}
            {/if}

            {include file='questions_tabs_partials/question_list.tpl' tabName=$tabs[$key][0] questions=$questions}
        {/foreach}
    </div>
</div>

{HTML::script('app/landingPage.js')}


{include file='common/footer.tpl'}
