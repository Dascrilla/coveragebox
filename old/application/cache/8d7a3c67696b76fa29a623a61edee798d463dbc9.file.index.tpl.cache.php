<?php /* Smarty version Smarty-3.0.8, created on 2012-12-26 10:27:15
         compiled from "/Users/anetsch/Desktop/eventopic 2/application/views/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138652157150dac2f3687451-80269495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d7a3c67696b76fa29a623a61edee798d463dbc9' => 
    array (
      0 => '/Users/anetsch/Desktop/eventopic 2/application/views/index.tpl',
      1 => 1356514011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138652157150dac2f3687451-80269495',
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
  

<div class="popup_outer_div">
      <div class="widget login_widget">
            <h3> OR CREATE AN ACCOUNT <BR> WITH EMAIL </h3>                 
           <form method="post" action="" class="form-horizontal" id="email_reg_form" name="email_reg_form"> 
              <span class="help-inline invalid_cred">Please check the credentials and try again!</span>
              <div class="control-group">
                <label class="control-label" for="inputEmail">Email*</label>
                <div class="controls">
                <input type="text" id="user_reg_email" placeholder="Email">
                <span class="help-inline">Email is Mandatory</span>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="inputEmail">Username</label>
                <div class="controls">
                <input type="text" id="user_reg_username" placeholder="Username">
                <span class="help-inline">Username is mandatory</span>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="inputPassword">Password*</label>
                <div class="controls">
                <input type="password" id="user_reg_password" placeholder="Password">
                <span class="help-inline">Password is mandatory</span>
                </div>
              </div>
              
          </form> 
        </div>

    </div>
</div>
      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Coverage Reports</h1>
        <p class="lead">Stop wasting time with Copy  Paste, Start using Drag  Drop to format your coverage now.</p>
         
         <form class="well form-search">
            <input type="text" class="input-home search-query" placeholder="search...">
            <button type="submit" class="btn btn-success">GO</button>
        </form>
      </div>
<hr>
<div class="row-fluid marketing" style="text-align=center">
    
    <div class="span3 offset1" style="height:130px">
      <div style="font-size: 60px;">
        <i class="icon-search icon-large"></i>
    </div> 
    
          <h4>Search for Coverage</h4>
    </div>
        
        
    <div class="span3" style="height:130px">
      <div style="font-size: 60px;">
        <i class="icon-hand-up icon-large"></i>
    </div> 
    
          <h4 class="blue">Drag  Drop</h4>
    </div>
       
       
 <div class="span3" style="height:130px">
      <div style="font-size: 60px">
        <i class="icon-table icon-large"></i>
    </div> 
  
          <h4>Organize your List</h4>
    </div>
</div>
<?php $sha = sha1('footer.tpl' . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
