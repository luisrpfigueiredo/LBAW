{foreach $SUCCESS_MESSAGES as $message}
    <div class = "alert alert-success alert-dismissible" role = "alert">
        <button type = "button" class = "close" data-dismiss = "alert" aria-label = "Close">
            <span aria-hidden = "true">&times;</span></button>
        <strong>Success!</strong> {$message}
    </div>
{/foreach}
{foreach $ERROR_MESSAGES as $message}
    <div class = "alert alert-danger alert-dismissible" role = "alert">
        <button type = "button" class = "close" data-dismiss = "alert" aria-label = "Close">
            <span aria-hidden = "true">&times;</span></button>
        <strong>Danger!</strong> {$message}
    </div>
{/foreach}
<br class = "clearfix">

{if $LOGGED_IN}
    {HTML::script('app/questions-info.js')}
    {HTML::script('votes/myVoting.js')}
{/if}
</body>
</html>