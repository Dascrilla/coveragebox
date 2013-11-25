<?php /* Smarty version Smarty-3.0.8, created on 2012-12-26 05:21:53
         compiled from "/Sites/eventopic 2/application/views/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77992168350dacfc1514f86-01607797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e583a0ef34a8290ba766f894815553a0ebcff741' => 
    array (
      0 => '/Sites/eventopic 2/application/views/profile.tpl',
      1 => 1356511912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77992168350dacfc1514f86-01607797',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $sha = sha1('header.tpl' . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
	<div class="profile_container">
		<div class="profile_name"><?php echo $_smarty_tpl->getVariable('templateData')->value['user_name'];?>
</div> 
		<div class="clearFloat"></div>
		<div class="inner_container">
			<?php if (isset($_smarty_tpl->getVariable('templateData',null,true,false)->value['user_profile_pic'])){?>
				<img class="pic" src="<?php echo $_smarty_tpl->getVariable('templateData')->value['user_profile_pic'];?>
?type=large" />
			<?php }else{ ?>
				<img class="pic" src="<?php echo $_smarty_tpl->getVariable('templateData')->value['profile_pic'];?>
?type=large" />
			<?php }?>
			
			<div class="sub_content">
				<i class="icon-globe"></i>
				<?php if (isset($_smarty_tpl->getVariable('templateData',null,true,false)->value['location'])){?>
				<?php echo $_smarty_tpl->getVariable('templateData')->value['location'];?>

				<?php }?>
			</div>
			<div class="clearFloat"></div>
			<?php if (isset($_smarty_tpl->getVariable('templateData',null,true,false)->value['profile_url'])){?>
			<a  target="_blank" href="<?php echo $_smarty_tpl->getVariable('templateData')->value['profile_url'];?>
" ><img class="fbicon" src="<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
assets/png/glyphicons_410_facebook.png" /> </a>
			<?php }?>
			<div class="clearFloat"></div>
		</div>
	</div>
	<div class="clearFloat"></div>
	<div class="events_main_container">
		<img class="events_loading" src="<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
assets/img/ajax_loader.gif" />
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
			<div class="next-posts alignleft"><a href="<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
profile/?pageNo=<?php echo $_smarty_tpl->getVariable('pageNo')->value;?>
&cat=filter_crt&filterContent=Y" >Older Entries</a></div>
		</div>
	</div>
<?php $sha = sha1('footer.tpl' . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?> 