<script src="../../javascript/votes/voting.js"></script>
<blockquote class="vote-up-down text-right">
    <div class="vote chev">
        <div class="increment up">
            <span class="hidden">
                {$votableType}
            </span>
            <span class="hidden">
                {if $votable_type === 'q'}
                    {$question['id']}
                {else}
                    {$answer['id']}
                {/if}
            </span>
            <span class="hidden">
    			{if $votable_type === 'q'}
                    {$resultadoQ}
                {else}
                    {$resultadoA[$answer['id']]}
                {/if}
    		</span>
        </div>
        <div class="increment down">
            <span class="hidden">
                {$votableType}
            </span>
            <span class="hidden">
                {if $votable_type === 'q'}
                    {$question['id']}
                {else}
                    {$answer['id']}
                {/if}
            </span>
            <span class="hidden">
    			{if $votable_type === 'q'}
                    {$resultadoQ}
                {else}
                    {$resultadoA[$answer['id']]}
                {/if}
    		</span>
            
        </div>

        <div class="count vote-count">
        	{if $votable_type === 'q'}
                {$question['votes']}
            {else}
                {$answer['votes']}
            {/if}
        </div>
    </div>

</blockquote>