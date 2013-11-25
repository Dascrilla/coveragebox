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
    '544af3954d2b46026fbe01cbfddaca81a566dac9' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/views/header.tpl',
      1 => 1355971901,
      2 => 'file',
    ),
    'f00377541c1ddf96e472d285db0c4d2bf73ec73b' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/views/modal.tpl',
      1 => 1356045850,
      2 => 'file',
    ),
    '9e72f3e5485040b0478ecf54971be31c521ffcc0' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/views/footer.tpl',
      1 => 1355921520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165867472550d9fe7ad19586-98753486',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$no_render) {?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Eventopic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="http://sharktorrents.com/assets/css/bootstrap.css" rel="stylesheet">
    <link href="http://sharktorrents.com/assets/css/site.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
        background-image: url(http://sharktorrents.com/assets/img/subtle_dots.png);
        text-align: center;
        background-attachment: fixed;
      }
    </style>
    <link href="http://sharktorrents.com/assets/css/bootstrap-responsive.css" rel="stylesheet">
    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="http://sharktorrents.com/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://sharktorrents.com/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://sharktorrents.com/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://sharktorrents.com/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://sharktorrents.com/assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>
    <div class="modal_pop_outer_div">
	<div id="login_modal" class="modal hide fade in" style="display: none; ">  
		<div class="modal-header">  
			<a class="close" data-dismiss="modal">×</a>  
			<h3>Sign Up and Join</h3>  
		</div>  
		<div class="modal-body">  
		<iframe src="https://www.facebook.com/plugins/registration?client_id=554583761222802&amp;redirect_uri=http://sharktorrents.com/account/registerFbUser&amp;fields=name,email" scrolling="auto" frameborder="no" allowtransparency="true" width="370" height="330"></iframe>
		               
		</div>  
		<div class="modal-footer">                 
		        <img src="http://sharktorrents.com/assets/img/ajax_loader.gif" class="ajax_busy"/>
		        <a href="#" class="btn" data-dismiss="modal">Close</a>  
		</div>  
	</div>
</div>  
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
         <img src=http://sharktorrents.com/assets/img/logo21.png alt="Eventopic" width="150" style="
   		  float: left;
    	  margin-left: 3%;">  
                         <form class="navbar-form pull-right">
                <button type="submit" class="btn site_login_btn" href="#login_modal"  id="modal-link">Login | Sign Up</button>
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
    <div class="popup_outer_div fb_login_div">
      <img class="fb_register_img" src="http://sharktorrents.com/assets/img/facebook_connect_logo.png"/>
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

<footer>
        
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://sharktorrents.com/assets/js/jquery.js"></script>
    <script src="http://sharktorrents.com/assets/js/bootstrap.js"></script>
    <script src="http://sharktorrents.com/assets/js/jquery.ias.js"></script>
    <script src="http://sharktorrents.com/assets/js/site.js"></script>


  </body>
</html>
<?php } ?>