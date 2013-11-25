<?php /* Smarty version Smarty-3.0.8, created on 2012-12-25 14:43:54
         compiled from "/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/views/friendslist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16518118550da01fad6ca63-24018512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6407847a6afb8f9f5ef5524156fab1473adbbc03' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/views/friendslist.tpl',
      1 => 1354582380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16518118550da01fad6ca63-24018512',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['fid']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['name'] = 'fid';
$_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('friendsList')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['fid']['total']);
?>
		<?php if (isset($_smarty_tpl->getVariable('friendsList',null,true,false)->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['fid']['index']]['id'])){?>
			<?php $_smarty_tpl->tpl_vars["fbid"] = new Smarty_variable(($_smarty_tpl->getVariable('friendsList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['fid']['index']]['id']), null, null);?>
		<?php }else{ ?>
			<?php $_smarty_tpl->tpl_vars["fbid"] = new Smarty_variable(($_smarty_tpl->getVariable('friendsList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['fid']['index']]['uid']), null, null);?>
		<?php }?>	
		<li data-facebook-id="<?php echo $_smarty_tpl->getVariable('fbid')->value;?>
" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/<?php echo $_smarty_tpl->getVariable('fbid')->value;?>
/picture">
			<p><?php echo $_smarty_tpl->getVariable('friendsList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['fid']['index']]['name'];?>
</p>
			<i class="icon-plus-sign"></i>
		</li>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['fid']['iteration']%3==0){?>
			<div class="friend_desktop friend"></div>
		<?php }?>

		<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['fid']['iteration']%2==0){?>
			<div class="friend_minidesktop friend"></div>
		<?php }?>
<?php endfor; endif; ?>
