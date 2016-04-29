{include file='common/header.tpl'}

<div class = "container">
    <section id = "body">
        {if $LOGGED_IN eq true }
            You are logged in. The other User Story is search. Try it.
        {else}
            Hello kind guest. Please <a href="{$BASE_URL}pages/users/authentication.php">login</a>
        {/if}
    </section>
</div>

{include file='common/footer.tpl'}
