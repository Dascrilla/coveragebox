{section name=fid loop=$friendsList}
		{if isset($friendsList[fid].id)}
			{assign var="fbid" value="{$friendsList[fid].id}"}
		{else}
			{assign var="fbid" value="{$friendsList[fid].uid}"}
		{/if}	
		<li data-facebook-id="{$fbid}" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/{$fbid}/picture">
			<p>{$friendsList[fid].name}</p>
			<i class="icon-plus-sign"></i>
		</li>
		{if $smarty.section.fid.iteration % 3 == 0}
			<div class="friend_desktop friend"></div>
		{/if}

		{if $smarty.section.fid.iteration % 2 == 0}
			<div class="friend_minidesktop friend"></div>
		{/if}
{/section}
