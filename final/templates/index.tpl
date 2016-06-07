{include file='common/header.tpl'}

<div class = "intro-header" alt ="feup-background">
    <div class = "row" style = "margin: 0 auto">
        <div class = "col-lg-12">
            <div class = "overlay"></div>
            <div class = "intro-message">
                <h1>Tidder</h1>
                <p>You ask, we answer!</p>
                <hr class = "intro-divider">
                <ul class = "list-inline intro-social-buttons">
                    <li>
                        <a href = "{url('pages/about')}" class = "btn btn-warning btn-lg">
                            <span class = "network-name">About Us</span>
                        </a>
                    </li>
                    <li>
                        <a href = "{url('pages/users/authentication')}" class = "btn btn-success btn-lg">
                            <span class = "network-name">Join Us</span>
                        </a>
                    </li>
                    <li>
                        <a href = "http://fe.up.pt" class = "btn btn-danger btn-lg" target = "_blank"><i class = "fa fa-twitter fa-fw"></i>
                            <span class = "network-name">@FEUP</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class = "container">
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
