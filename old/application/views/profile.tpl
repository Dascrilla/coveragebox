{include file='header.tpl'}
	<div class="profile_container">
		<div class="profile_name">{$templateData.user_name}</div> 
		<div class="clearFloat"></div>
		<div class="inner_container">
			{if isset($templateData.user_profile_pic)}
				<img class="pic" src="{$templateData.user_profile_pic}?type=large" />
			{else}
				<img class="pic" src="{$templateData.profile_pic}?type=large" />
			{/if}
			
			<div class="sub_content">
				<i class="icon-globe"></i>
				{if isset($templateData.location)}
				{$templateData.location}
				{/if}
			</div>
			<div class="clearFloat"></div>
			{if isset($templateData.profile_url)}
			<a  target="_blank" href="{$templateData.profile_url}" ><img class="fbicon" src="{$templateData.base_url}assets/png/glyphicons_410_facebook.png" /> </a>
			{/if}
			<div class="clearFloat"></div>
		</div>
	</div>
	<div class="clearFloat"></div>
	<div class="events_main_container">
		<img class="events_loading" src="{$templateData.base_url}assets/img/ajax_loader.gif" />
		<div class="clear_float"></div>
		<div class="events_container">	
			
		</div>
			
		<div class="event_filters">
			<div class="filter_name selected" filterCat='user'>
				Attending Events
			</div>
			<div class="filter_name" filterCat='friends'>
				Friends Events
			</div>
			<div class="filter_name" filterCat='myevents'>
				Recommended
			</div>
			<div class="filter_name" filterCat='local'>
				Local Events
			</div>
		</div>	
		<div class="navigation">
			<div class="previous-posts alignright"></div>
			<div class="next-posts alignleft"><a href="{$templateData.base_url}profile/?pageNo={$pageNo}&cat=filter_crt&filterContent=Y" >Older Entries</a></div>
		</div>
	</div>
{include file='footer.tpl'} 