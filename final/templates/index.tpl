{include file='common/header.tpl'}

<div class = "intro-header">
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
                        <a href = "{url('pages/register')}" class = "btn btn-success btn-lg">
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
    <ul class = "nav nav-tabs" id = "questions">
        <li class = "active">
            <a href = "#latest" aria-controls = "latest" role = "tab" data-toggle = "tab">Latest Questions</a>
        </li>
        <li>
            <a href = "#answered" aria-controls = "answered" role = "tab" data-toggle = "tab">Recently Updated</a>
        </li>
        <li>
            <a href = "#week" aria-controls = "week" role = "tab" data-toggle = "tab">Past Week</a>
        </li>
        <li>
            <a href = "#month" aria-controls = "month" role = "tab" data-toggle = "tab">Past Month</a>
        </li>
    </ul>

    <!-- TAB CONTENT -->
    <div class = "tab-content" style = "margin-top: 1em;">
        <div id = "latest" role = "tabpanel" class = "tab-pane active">
            <div class = "row">
                {if empty($questions)}
                    <div class="col-sm-12" style="text-align: center"><strong>No questions to load!</strong></div>
                {/if}

                {if !empty($questions)}
                {foreach array_chunk($questions, 2) as $chunk_questions}
                    {foreach $chunk_questions as $question}
                        <div class = "col-sm-6">
                            {include file='questions/partials/question_info.tpl'}
                        </div>
                    {/foreach}
                    <div class="clearfix"></div>
                    <div style="margin-bottom:15px;"></div>
                {/foreach}
                <div class = "load-more col-sm-12 space-top text-center">
                    <button type = "button" class = "btn btn-lg btn-primary col-sm-6 col-sm-offset-3 col-xs-12">Load More...</button>
                </div>
                {/if}
            </div>
        </div>
    </div>
</div>


{include file='common/footer.tpl'}
