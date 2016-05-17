<ul class = "nav nav-tabs" id = "questions">
    {foreach $tabs as $key => $tab}
        <li {if $key == 0}class = "active"{/if}>
            <a href = "#{$tab[0]}" aria-controls = "{$tab[0]}" role = "tab" data-toggle = "tab">{$tab[1]}</a>
        </li>
    {/foreach}
</ul>