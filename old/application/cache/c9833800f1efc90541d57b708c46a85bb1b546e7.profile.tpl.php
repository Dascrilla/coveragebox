<?php /*%%SmartyHeaderCode:48404210950dae1df549916-04522029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9833800f1efc90541d57b708c46a85bb1b546e7' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/covgen/application/views/profile.tpl',
      1 => 1356519067,
      2 => 'file',
    ),
    '9414f864ae8c6fa161701ddb1ce7f2443c2757ac' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/covgen/application/views/header.tpl',
      1 => 1356519065,
      2 => 'file',
    ),
    '2c33f212458eafe25c3aac2b77a9330e6393f9f1' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/covgen/application/views/modal.tpl',
      1 => 1356519067,
      2 => 'file',
    ),
    '8a16eb05f26ae4cd66982495c78aa26d28e9b19e' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/covgen/application/views/footer.tpl',
      1 => 1356519063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48404210950dae1df549916-04522029',
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

                         <div class="login_user_info">
                <p  class="muted logged_user_name">Hello, 
                  <a href="http://torrentable.com/profile">anetsch</a></p>
                <a class="thumbnail profile_pic" href="http://torrentable.com/profile">
                    <img alt="" src="http://eventtopicdev.com/assets/img/default-user-icon-profile.png">
                </a>  
                <ul class="nav pull-right">
                  <li id="fat-menu" class="dropdown">
                    <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown"> <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                      <li><a tabindex="-1" href="#" class="log_out">Logout</a></li>
                      <li>
                        <a tabindex="-1" href="http://torrentable.com/profile/inviteFriends" >
                          Invite Friends</a>
                      </li>                      
                    </ul>
                  </li>
                </ul>
                <!--<div class="profile_info" > 
                  
                  <p  class="muted log_out">Logout</p>
              </div>-->
            </div>
                    </div>

      </div>
    </div>
    <div id="fb-root"></div>
    <script src="//connect.facebook.net/en_US/all.js"></script>
    <div class="container"> 
    <script type="text/javascript">
    var fb_app_id = 554583761222802
    </script>  	<div class="profile_container">
		<div class="profile_name">anetsch</div> 
		<div class="clearFloat"></div>
		<div class="inner_container">
							<img class="pic" src="http://eventtopicdev.com/assets/img/default-user-icon-profile.png?type=large" />
						
			<div class="sub_content">
				<i class="icon-globe"></i>
							</div>
			<div class="clearFloat"></div>
						<div class="clearFloat"></div>
		</div>
	</div>
	<div class="clearFloat"></div>
	<div class="events_main_container">
		<img class="events_loading" src="http://torrentable.com/assets/img/ajax_loader.gif" />
		<div class="clear_float"></div>
		<div class="events_container">	
			
		</div>
			
		<div class="event_filters">
			<div class="filter_name selected" filterCat='user'>
				Attending Events
			</div>
			<div class="filter_name" filterCat='friends'>
				Friends Events
			</div>
			<div class="filter_name" filterCat='myevents'>
				Recommended
			</div>
			<div class="filter_name" filterCat='local'>
				Local Events
			</div>
		</div>	
		<div class="navigation">
			<div class="previous-posts alignright"></div>
			<div class="next-posts alignleft"><a href="http://torrentable.com/profile/?pageNo=2&cat=filter_crt&filterContent=Y" >Older Entries</a></div>
		</div>
	</div>
<footer>
        
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://torrentable.com/assets/js/jquery.js"></script>
    <script src="http://torrentable.com/assets/js/bootstrap.js"></script>
    <script src="http://torrentable.com/assets/js/jquery.ias.js"></script>
    <script src="http://torrentable.com/assets/js/site.js"></script>


  </body>
</html>
 <?php } ?>