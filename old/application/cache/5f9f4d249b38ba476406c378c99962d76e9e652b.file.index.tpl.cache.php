<?php /* Smarty version Smarty-3.0.8, created on 2012-12-25 14:28:58
         compiled from "/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/views/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165867472550d9fe7ad19586-98753486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f9f4d249b38ba476406c378c99962d76e9e652b' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/views/index.tpl',
      1 => 1355972780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165867472550d9fe7ad19586-98753486',
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
<div class="auth_popup">
    <div class="popup_outer_div fb_login_div">
      <img class="fb_register_img" src="<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
assets/img/facebook_connect_logo.png"/>
</div> 
              
          </form> 
        </div>

    </div>
</div>
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit et_wel_blck">
        <h1>Welcome to</h1>
        <img alt="Eventopic" src="assets/img/logo21.png">
        <p> A Real-Time Social Network for Exploring Popular Events in Your Area. Connect With Friends, Share, and Discover Events Worthy of Your Next Outing. </p>
        <p><a  href="#login_modal" class="btn btn-primary btn-large site_login_btn">Sign Up With Facebook</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <h2>Geo-Targeted Events</h2>
        </div>
        <div class="span4">
          <h2>Connect with Your Friends</h2>
       </div>
        <div class="span4">
          <h2>Discover Your City</h2>
        </div>
      </div>

<?php $sha = sha1('footer.tpl' . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
