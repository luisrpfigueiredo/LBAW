{include file='common/header.tpl'}

<div class = "container">
    <section id = "body">
        {if $LOGGED_IN eq true }
            You are looged in.
        {else}
            Hello kind guest. Please login
        {/if}
    </section>
</div>

{include file='common/footer.tpl'}
