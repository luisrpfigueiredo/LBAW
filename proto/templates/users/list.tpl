{include file='common/header.tpl'}

<section id="users">
  <h2>Users</h2>

  <div id="new_tweets"></div>

  {foreach $users as $key => $user}

  <article class="user-data">
	<h4>Showing user {$key+1}</h4>
	<ul>
		<li>{$user['username']}</li>
		<li>{$user['email']}</li>
		<li>{$user['type']}</li>
		<li>{$user['created_at']}</li>
	</ul>
  </article>

  {/foreach}

</section>

{include file='common/footer.tpl'}
