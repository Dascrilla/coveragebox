{assign var="popoverclass" value="right"}
{section name=eid loop=$eventList}
	{assign var="evtClass" value=""}
	{if ($smarty.section.eid.index eq 1 && $pageNo eq 2)}
		 {assign var="evtClass" value="right_event_cnt"}
	{/if}

	{if ( ($smarty.section.eid.index != 0 || $pageNo > 2) && ($smarty.section.eid.index %2 == 0))}
		 {assign var="evtClass" value="left_event_cnt"}
	{/if}

 	{if $popoverclass eq 'right'}
 		{assign var="popoverclass" value="left"}
 	{else}
 		{assign var="popoverclass" value="right"}
 	{/if}

 	<div class="event_holder  {$evtClass} {$smarty.section.eid.index}">  
	<div class="popover {$popoverclass} events">
		<div class="arrow"></div>
		<h3 class="event_title">{$eventList[eid].name|truncate:60:"..."}</h3>
		<div class="popover-content">
			<div class="leftContent">{$eventList[eid].start_time|date_format:"%A, %b %e %I:%M %p"}</div>	
			<div class="rightContent">
			  <a href="{$templateData.base_url}event/detail/{$eventList[eid].eid}" ><img src="{$eventList[eid].pic_big}" /></a>
			</div> 
			<div class="event_location">{$eventList[eid].location}</div>
			<div class="clearFloat"></div>
			<div class="event_members">
			{if ($eventList[eid].eid|isset:$eventMembers)}
		  	{assign var="membersList" value=$eventMembers[$eventList[eid].eid]}
		  		{section name=mid loop=$membersList max=6}		  			
		  			<a href="#" class="user_name" rel="tooltip" data-placement="top" data-original-title="{$userNames[$membersList[mid].uid].name}">
		  				<img src="https://graph.facebook.com/{$membersList[mid].uid}/picture" />
		  			</a>
		  		{/section}
		  	{/if}	
			</div>
		</div>
	 <div class="clearFloat"></div>	
	</div>

	<div class="clearFloat"></div>
 	</div>
 	{if ($smarty.section.eid.index+1) %2 == 0}
		 <div class="clearFloat"></div>
	{/if}
{/section}

{if $smarty.section.eid.total==0 }
	<div class="no_events" >
		No Events to display
	</div>	
{/if}	

