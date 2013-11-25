<?php /* Smarty version Smarty-3.0.8, created on 2012-12-25 14:29:41
         compiled from "/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/views/event_members.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175572466450d9fea58efd04-53697021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b9487f0b7cff84bd1dccf2adf0f642c7433df4a' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/views/event_members.tpl',
      1 => 1356453345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175572466450d9fea58efd04-53697021',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['mid']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['name'] = 'mid';
$_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('attendingMembers')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['max'] = (int)16;
$_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['total']);
?>		  			
		<a href="#" class="user_name" rel="tooltip" data-placement="top" data-original-title="<?php echo $_smarty_tpl->getVariable('attendingMembers')->value[$_smarty_tpl->getVariable('smarty')->value['section']['mid']['index']]['name'];?>
">
			<img src="https://graph.facebook.com/<?php echo $_smarty_tpl->getVariable('attendingMembers')->value[$_smarty_tpl->getVariable('smarty')->value['section']['mid']['index']]['id'];?>
/picture?type=normal"  class="event_member_pic"/>
		</a>
<?php endfor; endif; ?>