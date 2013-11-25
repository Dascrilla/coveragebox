<?php /*%%SmartyHeaderCode:111517680950dacbd681d279-39131326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0862fe251ae1c1a2a864e8f0f73567fc9d61066' => 
    array (
      0 => '/Sites/eventopic 2/application/views/index.tpl',
      1 => 1356514011,
      2 => 'file',
    ),
    'c6eda0e29aac558419d92361d47388bf1eb574ab' => 
    array (
      0 => '/Sites/eventopic 2/application/views/header.tpl',
      1 => 1356511910,
      2 => 'file',
    ),
    '7d673b14febac94a17a8dfbb7228a7948c479ff5' => 
    array (
      0 => '/Sites/eventopic 2/application/views/modal.tpl',
      1 => 1356511909,
      2 => 'file',
    ),
    '9c2a43964af51f3f55c75cfbf932b4d828867dd2' => 
    array (
      0 => '/Sites/eventopic 2/application/views/footer.tpl',
      1 => 1356511911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111517680950dacbd681d279-39131326',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$no_render) {?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Eventopic 2.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/site.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
        background-image: url(http://localhost/assets/img/subtle_dots.png);
        text-align: center;
      }
    </style>
    <link href="http://localhost/assets/css/bootstrap-responsive.css" rel="stylesheet">
    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="http://localhost/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://localhost/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://localhost/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://localhost/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://localhost/assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>
    <div class="modal_pop_outer_div">
	<div id="login_modal" class="modal hide fade in" style="display: none; ">  
		<div class="modal-header">  
			<a class="close" data-dismiss="modal">×</a>  
			<h3>Welcome</h3>  
		</div>  
		<div class="modal-body">  
		               
		</div>  
		<div class="modal-footer">  
		        <a href="#" class="btn btn-success email_signin" id="new_user_signin">New User</a>
		        <a href="#" class="btn btn-info email_signin" id="existing_user_signin">Existing User</a>                
		    
		        <a href="#" class="btn" data-dismiss="modal">Close</a>  
		</div>  
	</div>
</div>  
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
         
         <img src=http://localhost/assets/img/logo21.png alt="Eventopic" width="150" style="
        float: left;
        margin-left: 3%;">  

                         <form class="navbar-form pull-right">
                <button type="submit" class="btn" href="#login_modal"  data-toggle="modal" id="modal-link">Login|Sign Up</button>
              </form>
                    </div>

      </div>
    </div>
    <div id="fb-root"></div>
    <script src="//connect.facebook.net/en_US/all.js"></script>
    <div class="container"> 
    <script type="text/javascript">
    var fb_app_id = 554583761222802
    </script>  <div class="auth_popup">
  

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
<footer>
        
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://localhost/assets/js/jquery.js"></script>
    <script src="http://localhost/assets/js/bootstrap.js"></script>
    <script src="http://localhost/assets/js/jquery.ias.js"></script>
    <script src="http://localhost/assets/js/site.js"></script>


  </body>
</html>
<?php } ?>