{include file='common/header.tpl'}

<div class = "container">
    <section id = "body">
        {if $LOGGED_IN eq true }
            You are looged in.
        {else}
            Hello kind guest. Please <a href="{$BASE_URL}pages/users/authentication.php">login</a>
        {/if}
    </section>
</div>

{include file='common/footer.tpl'}
