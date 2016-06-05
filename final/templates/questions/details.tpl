{include file='common/header.tpl'}

<div class="container" style="margin-top: 2em">
    {include file='common/breadcrumb.tpl'}
    <h1>Question Details</h1>
    <div class="question_space">
        {include file="questions/partials/question_info.tpl"}
    </div>

    <div class="answer_space ">

        {foreach $answers as $answer}
            {include file="answers/partials/answer_info.tpl"}
        {/foreach}

        {include file="answers/create.tpl"}
    </div>


</div>



{include file='common/footer.tpl'}
