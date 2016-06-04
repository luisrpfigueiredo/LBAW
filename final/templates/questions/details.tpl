{include file='common/header.tpl'}

<div class="container" style="margin-top: 2em">
    <h1>Question Details</h1>

    {include file="questions/partials/question_info.tpl"}

    {foreach $answers as $answer}
        {include file="answers/partials/answer_info.tpl"}
	{/foreach}

</div>

{include file='common/footer.tpl'}
