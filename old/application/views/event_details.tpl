{include file='header.tpl'}
	<div class="event_container">
		<div class="event_name">{$eventDetails.name}</div> 
		<div class="clearFloat"></div>
		<div class="inner_container">
			<img class="pic event_pic" src="{$eventDetails.pic_big}" />	
			<div class="right_inner_container">
				<div class="event_sub_content">
					<i class="icon-globe"></i>
					{if isset($eventDetails.location)}
					{$eventDetails.location}
					{/if}
				</div>
				<div class="right_sub_content">
					<i class="icon-folder-close"></i>
					{$eventDetails.start_time|date_format:"%A, %B %e,G %I:%M %p"}
					<br>
					<i class="icon-time"></i>
					{$eventDetails.start_time|date_format:"%I:%M %p"}
				</div>
				<div class="clearFloat"></div>
				<div class="event_detail_divider"></div>
				<div class="clearFloat"></div>
				{if isset($eventDetails.profile_url)}
				<a  target="_blank" href="{$eventDetails.profile_url}" ><img class="fbicon" src="{$templateData.base_url}assets/png/glyphicons_410_facebook.png" /> </a>
				{/if}
				<div class="clearFloat"></div>
				<div class="event_description">
					<i class="icon-list"></i>
					<span>{$eventDetails.description}</span>					
				</div>
			</div>	
			<div class="clearFloat"></div>
		</div>

	</div>
	<div class="clearFloat"></div>
	<div class="events_main_container">
		<div class="events_main_inner_container">
		<img class="events_loading" src="{$templateData.base_url}assets/img/ajax_loader.gif" />
		<div class="clear_float"></div>
		<div class="events_feed_container">	
			<div class="post_input_holder">
				<input type="text" class="event_post_text" eventId="{$cur_event_id}" placeholder="Write something…">		
			</div>
			<div class="clearFloat"></div>
			<div class="comment_post_splitter"></div>
			<div class="clearFloat"></div>
			<div class="posts_list_holder">
			{section name=epid loop=$eventPostDetails max=6}
				<div class="post_main_holder">
					<a href="#" class="user_name event_poster" rel="tooltip" data-placement="top" data-original-title="{$eventPostDetails[epid].from.name}">
		  				<img class="event_poster_pic" src="https://graph.facebook.com/{$eventPostDetails[epid].from.id}/picture?type=normal" />
		  			</a>
		  			<div class="post_right_content">
		  				<div  class="event_poster_name">
		  					{$eventPostDetails[epid].from.name}
		  				</div >
		  				<div class="clearFloat"></div>
		  				<div  class="event_post_message">
		  					{if (message|isset:$eventPostDetails[epid])}
		  						{$eventPostDetails[epid].message}
		  					{/if}	
		  				</div>
		  				<div class="clearFloat"></div>
		  				<div  class="event_post_time">
		  					{$eventPostDetails[epid].created_time|date_format:"%A, %b %e %I:%M %p"}
		  				</div >
		  			</div>	
				</div>
				<div class="clearFloat"></div>
				<div class="events_post_splitter"></div>
			{/section}	
		</div>
		</div>
			
		<div class="event_main_inner_right">
				 <div id="map_canvas"></div>
				 <div class="clearFloat"></div>
				 <div class="members_pic_holder">
				 		<i class="icon-user member_icon"></i>
				 		<div class="clearFloat"></div>	
				 		{include file='event_members.tpl'}
				 </div>
				 <div class="clearFloat"></div>
		</div>
	  </div>
	  <div class="clearFloat"></div>				
	</div>
{literal}
  <script type="text/javascript">
	function setVenuePosition() {
		venue_latitude = '{/literal}{$venueDetails.location.latitude}{literal}';
		venue_longitude = '{/literal}{$venueDetails.location.longitude}{literal}';	
	}  		
  </script>
{/literal}

{include file='footer.tpl'} 