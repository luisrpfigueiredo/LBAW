{include file='common/header.tpl'}

<div class="container" style="margin-top: 2em">
    {include file='common/breadcrumb.tpl'}
    <h1>Question Details</h1>

    {include file="questions/partials/question_info.tpl"}

    {foreach $answers as $answer}
        {include file="answers/partials/answer_info.tpl"}
	{/foreach}

    {include file="answers/create.tpl"}

</div>



{include file='common/footer.tpl'}
