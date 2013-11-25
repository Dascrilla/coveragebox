{section name=mid loop=$attendingMembers max=16}		  			
		<a href="#" class="user_name" rel="tooltip" data-placement="top" data-original-title="{$attendingMembers[mid].name}">
			<img src="https://graph.facebook.com/{$attendingMembers[mid].id}/picture?type=normal"  class="event_member_pic"/>
		</a>
{/section}