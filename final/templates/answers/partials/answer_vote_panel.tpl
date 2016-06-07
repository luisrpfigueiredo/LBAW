<blockquote class="vote-up-down text-right">
    <div class="vote chev" data-type="a" data-id="{$answer['id']}" data-url="{url('api/votes/vote')}">

        <div class="increment up{if $answer['voted'] == 1} active{/if}"></div>
        <div class="increment down{if $answer['voted'] == -1} active{/if}"></div>

        <div class="count vote-count" id="value" data-url="{url('api/votes/refresh')}">
            {$answer['votes']}
        </div>
    </div>

</blockquote>