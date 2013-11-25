{if $pageNo == 2}
{include file='header.tpl'}
	<div class="profile_container">
		<h2 class="title">
				Invite your friends to Eventopic						
		</h2>
		<a href="#" class="connect-btn">
					<span><i class="icon-envelope"></i>Send Invitations</span>
		</a>
		<div class="clearFloat"></div>
		<div class="inner_container invite">
			<form class="form-inline invite_form">
				<input type="text" class="input-large" id="search_name" placeholder="Search Friends...">
			</form>	
			<div class="clearFloat"></div>
{/if}			
			<ul class="friendsListUL">		
				{include file='friendslist.tpl'}
			</ul>
			<div class="navigation">
				<div class="previous-posts alignright"></div>
				<div class="next-posts alignleft"><a href="{$templateData.base_url}profile/inviteFriends/{$pageNo}" >Older Entries</a></div>
			</div>
{if $pageNo == 2}			
			<div class="clearFloat"></div>
		</div>
	</div>
{include file='footer.tpl'}
{/if}