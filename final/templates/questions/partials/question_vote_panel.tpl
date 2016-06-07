<blockquote class="vote-up-down text-right">
    <div class="vote chev" data-type="q" data-id="{$question['id']}" data-url="{url('api/votes/vote')}">
        <div class="increment up{if $question['voted'] == 1} active{/if}"></div>
        <div class="increment down{if $question['voted'] == -1} active{/if}"></div>

        <div class="count vote-count" id="value" data-url="{url('api/votes/refresh')}">
            {$question['votes']}
        </div>
    </div>
</blockquote>