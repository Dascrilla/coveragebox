<?php /* Smarty version Smarty-3.0.8, created on 2012-12-27 21:43:31
         compiled from "/hermes/web10/b822/moo.sharktorrentscom/covgen/old/application/views/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144449245050dd0753874719-95993544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fce119c65625887ac9cac5dc8bd54a6c0c6ecca0' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/covgen/old/application/views/header.tpl',
      1 => 1356661333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144449245050dd0753874719-95993544',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Eventopic 2.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
assets/css/site.css" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />

    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
        background-image: url(<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
assets/img/subtle_dots.png);
        text-align: center;
      }
    </style>
    <link href="<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
assets/css/bootstrap-responsive.css" rel="stylesheet">
    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
assets/ico/apple-touch-icon-57-precomposed.png">

    <script src="<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
assets/js/jquery.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
assets/js/bootstrap.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
assets/js/jquery.ias.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
assets/js/site.js"></script>
    <!-- <script src="http://code.jquery.com/jquery-1.8.3.js"></script> -->
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
  </head>

  <body>
    <?php $sha = sha1('modal.tpl' . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template('modal.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
         
         <img src=<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
assets/img/logo21.png alt="Eventopic" width="150" style="
        float: left;
        margin-left: 3%;">  

           <?php if ($_smarty_tpl->getVariable('templateData')->value['logged_in_user_id']==''){?>
              <form class="navbar-form pull-right">
                <button type="submit" class="btn" href="#login_modal"  data-toggle="modal" id="modal-link">Login|Sign Up</button>
              </form>
            <?php }else{ ?>
              <div class="login_user_info">
                <p  class="muted logged_user_name">Hello, 
                  <a href="<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
profile"><?php echo $_smarty_tpl->getVariable('templateData')->value['lastname'];?>
</a></p>
                <a class="thumbnail profile_pic" href="<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
profile">
                    <img alt="" src="<?php echo $_smarty_tpl->getVariable('templateData')->value['profile_pic'];?>
">
                </a>  
                <ul class="nav pull-right">
                  <li id="fat-menu" class="dropdown">
                    <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown"> <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                      <li><a tabindex="-1" href="#" class="log_out">Logout</a></li>
                      <li>
                        <a tabindex="-1" href="<?php echo $_smarty_tpl->getVariable('templateData')->value['base_url'];?>
profile/inviteFriends" >
                          Invite Friends</a>
                      </li>                      
                    </ul>
                  </li>
                </ul>
                <!--<div class="profile_info" > 
                  
                  <p  class="muted log_out">Logout</p>
              </div>-->
            </div>
            <?php }?>
        </div>

      </div>
    </div>
    <div id="fb-root"></div>
    <script src="//connect.facebook.net/en_US/all.js"></script>
    <div class="container"> 
    <script type="text/javascript">
    var fb_app_id = <?php echo $_smarty_tpl->getVariable('templateData')->value['fb_app_id'];?>

    </script>  