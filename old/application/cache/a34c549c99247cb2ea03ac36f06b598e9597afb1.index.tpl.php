<?php /*%%SmartyHeaderCode:178875630350dd07535d33c7-97051526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a34c549c99247cb2ea03ac36f06b598e9597afb1' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/covgen/old/application/views/index.tpl',
      1 => 1356661335,
      2 => 'file',
    ),
    'fce119c65625887ac9cac5dc8bd54a6c0c6ecca0' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/covgen/old/application/views/header.tpl',
      1 => 1356661333,
      2 => 'file',
    ),
    '7afb67816c82aebfe664d177bba429559c1e5e8e' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/covgen/old/application/views/modal.tpl',
      1 => 1356661336,
      2 => 'file',
    ),
    'ed797b9bcfac6b701e0ac11b6947934756b0ebe3' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/covgen/old/application/views/footer.tpl',
      1 => 1356661332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178875630350dd07535d33c7-97051526',
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
    <link href="http://torrentable.com/assets/css/bootstrap.css" rel="stylesheet">
    <link href="http://torrentable.com/assets/css/site.css" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />

    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
        background-image: url(http://torrentable.com/assets/img/subtle_dots.png);
        text-align: center;
      }
    </style>
    <link href="http://torrentable.com/assets/css/bootstrap-responsive.css" rel="stylesheet">
    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="http://torrentable.com/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://torrentable.com/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://torrentable.com/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://torrentable.com/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://torrentable.com/assets/ico/apple-touch-icon-57-precomposed.png">

    <script src="http://torrentable.com/assets/js/jquery.js"></script>
    <script src="http://torrentable.com/assets/js/bootstrap.js"></script>
    <script src="http://torrentable.com/assets/js/jquery.ias.js"></script>
    <script src="http://torrentable.com/assets/js/site.js"></script>
    <!-- <script src="http://code.jquery.com/jquery-1.8.3.js"></script> -->
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
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
         
         <img src=http://torrentable.com/assets/img/logo21.png alt="Eventopic" width="150" style="
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
    


  </body>
</html>
<?php } ?>