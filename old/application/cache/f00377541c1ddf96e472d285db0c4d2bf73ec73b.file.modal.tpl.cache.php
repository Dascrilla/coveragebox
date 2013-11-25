<?php /* Smarty version Smarty-3.0.8, created on 2012-12-25 14:28:59
         compiled from "/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/views/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211437312450d9fe7b131e93-70671057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f00377541c1ddf96e472d285db0c4d2bf73ec73b' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/views/modal.tpl',
      1 => 1356045850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211437312450d9fe7b131e93-70671057',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="modal_pop_outer_div">
	<div id="login_modal" class="modal hide fade in" style="display: none; ">  
		<div class="modal-header">  
			<a class="close" data-dismiss="modal">×</a>  
			<h3>Sign Up and Join</h3>  
		</div>  
		<div class="modal-body">  
		<iframe src="https://www.facebook.com/plugins/registration?client_id=<?php echo $_smarty_tpl->getVariable('templateData')->value['fb_app_id'];?>
&amp;redirect_uri=<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
account/registerFbUser&amp;fields=name,email" scrolling="auto" frameborder="no" allowtransparency="true" width="370" height="330"></iframe>
		               
		</div>  
		<div class="modal-footer">                 
		        <img src="<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
assets/img/ajax_loader.gif" class="ajax_busy"/>
		        <a href="#" class="btn" data-dismiss="modal">Close</a>  
		</div>  
	</div>
</div>  
