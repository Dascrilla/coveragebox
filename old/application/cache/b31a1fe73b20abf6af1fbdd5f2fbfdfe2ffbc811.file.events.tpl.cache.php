<?php /* Smarty version Smarty-3.0.8, created on 2012-12-25 14:29:09
         compiled from "/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/views/events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183041430450d9fe85d9d423-53450542%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b31a1fe73b20abf6af1fbdd5f2fbfdfe2ffbc811' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/views/events.tpl',
      1 => 1356388411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183041430450d9fe85d9d423-53450542',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_truncate')) include '/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/third_party/Smarty/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/third_party/Smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_isset')) include '/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/third_party/Smarty/libs/plugins/modifier.isset.php';
?><?php $_smarty_tpl->tpl_vars["popoverclass"] = new Smarty_variable("right", null, null);?>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['eid']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['name'] = 'eid';
$_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('eventList')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['eid']['total']);
?>
	<?php $_smarty_tpl->tpl_vars["evtClass"] = new Smarty_variable('', null, null);?>
	<?php if (($_smarty_tpl->getVariable('smarty')->value['section']['eid']['index']==1&&$_smarty_tpl->getVariable('pageNo')->value==2)){?>
		 <?php $_smarty_tpl->tpl_vars["evtClass"] = new Smarty_variable("right_event_cnt", null, null);?>
	<?php }?>

	<?php if ((($_smarty_tpl->getVariable('smarty')->value['section']['eid']['index']!=0||$_smarty_tpl->getVariable('pageNo')->value>2)&&($_smarty_tpl->getVariable('smarty')->value['section']['eid']['index']%2==0))){?>
		 <?php $_smarty_tpl->tpl_vars["evtClass"] = new Smarty_variable("left_event_cnt", null, null);?>
	<?php }?>

 	<?php if ($_smarty_tpl->getVariable('popoverclass')->value=='right'){?>
 		<?php $_smarty_tpl->tpl_vars["popoverclass"] = new Smarty_variable("left", null, null);?>
 	<?php }else{ ?>
 		<?php $_smarty_tpl->tpl_vars["popoverclass"] = new Smarty_variable("right", null, null);?>
 	<?php }?>

 	<div class="event_holder  <?php echo $_smarty_tpl->getVariable('evtClass')->value;?>
 <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['eid']['index'];?>
">  
	<div class="popover <?php echo $_smarty_tpl->getVariable('popoverclass')->value;?>
 events">
		<div class="arrow"></div>
		<h3 class="event_title"><?php echo smarty_modifier_truncate($_smarty_tpl->getVariable('eventList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['eid']['index']]['name'],60,"...");?>
</h3>
		<div class="popover-content">
			<div class="leftContent"><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('eventList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['eid']['index']]['start_time'],"%A, %b %e %I:%M %p");?>
</div>	
			<div class="rightContent">
			  <a href="<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
event/detail/<?php echo $_smarty_tpl->getVariable('eventList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['eid']['index']]['eid'];?>
" ><img src="<?php echo $_smarty_tpl->getVariable('eventList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['eid']['index']]['pic_big'];?>
" /></a>
			</div> 
			<div class="event_location"><?php echo $_smarty_tpl->getVariable('eventList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['eid']['index']]['location'];?>
</div>
			<div class="clearFloat"></div>
			<div class="event_members">
			<?php if ((smarty_modifier_isset($_smarty_tpl->getVariable('eventList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['eid']['index']]['eid'],$_smarty_tpl->getVariable('eventMembers')->value))){?>
		  	<?php $_smarty_tpl->tpl_vars["membersList"] = new Smarty_variable($_smarty_tpl->getVariable('eventMembers')->value[$_smarty_tpl->getVariable('eventList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['eid']['index']]['eid']], null, null);?>
		  		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['mid']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['name'] = 'mid';
$_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('membersList')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mid']['max'] = (int)6;
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
		  			<a href="#" class="user_name" rel="tooltip" data-placement="top" data-original-title="<?php echo $_smarty_tpl->getVariable('userNames')->value[$_smarty_tpl->getVariable('membersList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['mid']['index']]['uid']]['name'];?>
">
		  				<img src="https://graph.facebook.com/<?php echo $_smarty_tpl->getVariable('membersList')->value[$_smarty_tpl->getVariable('smarty')->value['section']['mid']['index']]['uid'];?>
/picture" />
		  			</a>
		  		<?php endfor; endif; ?>
		  	<?php }?>	
			</div>
		</div>
	 <div class="clearFloat"></div>	
	</div>

	<div class="clearFloat"></div>
 	</div>
 	<?php if (($_smarty_tpl->getVariable('smarty')->value['section']['eid']['index']+1)%2==0){?>
		 <div class="clearFloat"></div>
	<?php }?>
<?php endfor; endif; ?>

<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['eid']['total']==0){?>
	<div class="no_events" >
		No Events to display
	</div>	
<?php }?>	

