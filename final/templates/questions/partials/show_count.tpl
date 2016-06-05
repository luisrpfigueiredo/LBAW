<blockquote class="vote-up-down text-right">
    <div class="vote chev">

        <div class="count vote-count">
	        {if $votable_type === 'q'}
	            {$question['votes']}
	        {else}
	            {$answer['votes']}
	        {/if}
        </div>

    </div>
</blockquote>