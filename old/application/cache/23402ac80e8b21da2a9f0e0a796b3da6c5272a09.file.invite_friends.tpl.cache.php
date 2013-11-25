<?php /* Smarty version Smarty-3.0.8, created on 2012-12-25 14:43:54
         compiled from "/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/views/invite_friends.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89471989650da01fab4f167-87725863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23402ac80e8b21da2a9f0e0a796b3da6c5272a09' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/views/invite_friends.tpl',
      1 => 1355911080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89471989650da01fab4f167-87725863',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('pageNo')->value==2){?>
<?php $sha = sha1('header.tpl' . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
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
<?php }?>			
			<ul class="friendsListUL">		
				<?php $sha = sha1('friendslist.tpl' . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template('friendslist.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
			</ul>
			<div class="navigation">
				<div class="previous-posts alignright"></div>
				<div class="next-posts alignleft"><a href="<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
profile/inviteFriends/<?php echo $_smarty_tpl->getVariable('pageNo')->value;?>
" >Older Entries</a></div>
			</div>
<?php if ($_smarty_tpl->getVariable('pageNo')->value==2){?>			
			<div class="clearFloat"></div>
		</div>
	</div>
<?php $sha = sha1('footer.tpl' . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<?php }?>