<?php /* Smarty version Smarty-3.0.8, created on 2012-12-25 14:29:41
         compiled from "/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/views/event_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19733740150d9fea56b84c2-90624382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '814242a354fb1e63c369657a556f9503d0d24946' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/views/event_details.tpl',
      1 => 1356459461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19733740150d9fea56b84c2-90624382',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/third_party/Smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_isset')) include '/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/third_party/Smarty/libs/plugins/modifier.isset.php';
?><?php $sha = sha1('header.tpl' . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<div class="event_container">
		<div class="event_name"><?php echo $_smarty_tpl->getVariable('eventDetails')->value['name'];?>
</div> 
		<div class="clearFloat"></div>
		<div class="inner_container">
			<img class="pic event_pic" src="<?php echo $_smarty_tpl->getVariable('eventDetails')->value['pic_big'];?>
" />	
			<div class="right_inner_container">
				<div class="event_sub_content">
					<i class="icon-globe"></i>
					<?php if (isset($_smarty_tpl->getVariable('eventDetails',null,true,false)->value['location'])){?>
					<?php echo $_smarty_tpl->getVariable('eventDetails')->value['location'];?>

					<?php }?>
				</div>
				<div class="right_sub_content">
					<i class="icon-folder-close"></i>
					<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('eventDetails')->value['start_time'],"%A, %B %e,G %I:%M %p");?>

					<br>
					<i class="icon-time"></i>
					<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('eventDetails')->value['start_time'],"%I:%M %p");?>

				</div>
				<div class="clearFloat"></div>
				<div class="event_detail_divider"></div>
				<div class="clearFloat"></div>
				<?php if (isset($_smarty_tpl->getVariable('eventDetails',null,true,false)->value['profile_url'])){?>
				<a  target="_blank" href="<?php echo $_smarty_tpl->getVariable('eventDetails')->value['profile_url'];?>
" ><img class="fbicon" src="<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
assets/png/glyphicons_410_facebook.png" /> </a>
				<?php }?>
				<div class="clearFloat"></div>
				<div class="event_description">
					<i class="icon-list"></i>
					<span><?php echo $_smarty_tpl->getVariable('eventDetails')->value['description'];?>
</span>					
				</div>
			</div>	
			<div class="clearFloat"></div>
		</div>

	</div>
	<div class="clearFloat"></div>
	<div class="events_main_container">
		<div class="events_main_inner_container">
		<img class="events_loading" src="<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
assets/img/ajax_loader.gif" />
		<div class="clear_float"></div>
		<div class="events_feed_container">	
			<div class="post_input_holder">
				<input type="text" class="event_post_text" eventId="<?php echo $_smarty_tpl->getVariable('cur_event_id')->value;?>
" placeholder="Write something…">		
			</div>
			<div class="clearFloat"></div>
			<div class="comment_post_splitter"></div>
			<div class="clearFloat"></div>
			<div class="posts_list_holder">
			<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['epid']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['name'] = 'epid';
$_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('eventPostDetails')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['max'] = (int)6;
$_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['epid']['total']);
?>
				<div class="post_main_holder">
					<a href="#" class="user_name event_poster" rel="tooltip" data-placement="top" data-original-title="<?php echo $_smarty_tpl->getVariable('eventPostDetails')->value[$_smarty_tpl->getVariable('smarty')->value['section']['epid']['index']]['from']['name'];?>
">
		  				<img class="event_poster_pic" src="https://graph.facebook.com/<?php echo $_smarty_tpl->getVariable('eventPostDetails')->value[$_smarty_tpl->getVariable('smarty')->value['section']['epid']['index']]['from']['id'];?>
/picture?type=normal" />
		  			</a>
		  			<div class="post_right_content">
		  				<div  class="event_poster_name">
		  					<?php echo $_smarty_tpl->getVariable('eventPostDetails')->value[$_smarty_tpl->getVariable('smarty')->value['section']['epid']['index']]['from']['name'];?>

		  				</div >
		  				<div class="clearFloat"></div>
		  				<div  class="event_post_message">
		  					<?php if ((smarty_modifier_isset('message',$_smarty_tpl->getVariable('eventPostDetails')->value[$_smarty_tpl->getVariable('smarty')->value['section']['epid']['index']]))){?>
		  						<?php echo $_smarty_tpl->getVariable('eventPostDetails')->value[$_smarty_tpl->getVariable('smarty')->value['section']['epid']['index']]['message'];?>

		  					<?php }?>	
		  				</div>
		  				<div class="clearFloat"></div>
		  				<div  class="event_post_time">
		  					<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('eventPostDetails')->value[$_smarty_tpl->getVariable('smarty')->value['section']['epid']['index']]['created_time'],"%A, %b %e %I:%M %p");?>

		  				</div >
		  			</div>	
				</div>
				<div class="clearFloat"></div>
				<div class="events_post_splitter"></div>
			<?php endfor; endif; ?>	
		</div>
		</div>
			
		<div class="event_main_inner_right">
				 <div id="map_canvas"></div>
				 <div class="clearFloat"></div>
				 <div class="members_pic_holder">
				 		<i class="icon-user member_icon"></i>
				 		<div class="clearFloat"></div>	
				 		<?php $sha = sha1('event_members.tpl' . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template('event_members.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
				 </div>
				 <div class="clearFloat"></div>
		</div>
	  </div>
	  <div class="clearFloat"></div>				
	</div>

  <script type="text/javascript">
	function setVenuePosition() {
		venue_latitude = '<?php echo $_smarty_tpl->getVariable('venueDetails')->value['location']['latitude'];?>
';
		venue_longitude = '<?php echo $_smarty_tpl->getVariable('venueDetails')->value['location']['longitude'];?>
';	
	}  		
  </script>


<?php $sha = sha1('footer.tpl' . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?> 