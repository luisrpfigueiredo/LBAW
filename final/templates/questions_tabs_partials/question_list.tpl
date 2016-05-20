<!-- TAB CONTENT -->
<div id = "{$tabName}" role = "tabpanel" class = "tab-pane {$panelActive}">
    <div class = "row">
        {if empty($questions)}
            <div class = "col-sm-12" style = "text-align: center"><strong>No questions to load!</strong></div>
        {/if}

        {if !empty($questions)}
            {foreach array_chunk($questions, 2) as $chunk_questions}
                <div class="question-line" style = "margin-bottom:15px;">
                    {foreach $chunk_questions as $question}
                        <div class = "col-sm-6 question-col">
                            {include file='questions/partials/question_info.tpl'}
                        </div>
                    {/foreach}
                    <div class = "clearfix"></div>
                </div>
            {/foreach}
            <div class = "load-more col-sm-12 space-top text-center"
                 data-next-page = "1"
                 data-url = "{url('api/questions/home_load_more')}"
                 data-tab = "{$tabName}">
                <button type = "button" class = "btn btn-lg btn-primary col-sm-6 col-sm-offset-3 col-xs-12">
                    Load More...
                </button>
            </div>
        {/if}
    </div>
</div>