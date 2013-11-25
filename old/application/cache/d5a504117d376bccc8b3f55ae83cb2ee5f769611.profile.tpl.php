<?php /*%%SmartyHeaderCode:36683507050d9fe84f2f982-11422513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5a504117d376bccc8b3f55ae83cb2ee5f769611' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/views/profile.tpl',
      1 => 1356065129,
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
  'nocache_hash' => '36683507050d9fe84f2f982-11422513',
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
                         <div class="login_user_info">
                <p  class="muted logged_user_name">Hello, 
                  <a href="http://sharktorrents.com/profile">Alex</a></p>
                <a class="thumbnail profile_pic" href="http://sharktorrents.com/profile">
                    <img alt="" src="http://graph.facebook.com/506078586/picture">
                </a>  
                <ul class="nav pull-right">
                  <li id="fat-menu" class="dropdown">
                    <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown"> <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                       <li>
                        <a tabindex="-1" href="http://sharktorrents.com/profile" >
                          <i class="icon-user icon-white"></i> Profile</a>
                      </li> 
                      <li>
                        <a tabindex="-1" href="http://sharktorrents.com/profile/inviteFriends" >
                          <i class="icon-envelope icon-white"></i> Invite Friends</a>
                      </li>        
                      <li><a tabindex="-1" href="#" class="log_out"> <i class="icon-remove icon-white"></i> Logout</a></li>
                                    
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
		<div class="profile_name">Alex Netsch</div> 
		<div class="clearFloat"></div>
		<div class="inner_container">
							<img class="pic" src="http://graph.facebook.com/506078586/picture?type=large" />
						
			<div class="sub_content">
				<i class="icon-globe"></i>
							</div>
			<div class="clearFloat"></div>
						<a  target="_blank" href="http://www.facebook.com/alexnetsch" ><img class="fbicon" src="http://sharktorrents.com/assets/png/glyphicons_410_facebook.png" /> </a>
						<div class="clearFloat"></div>
		</div>
	</div>
	<div class="clearFloat"></div>
	<div class="events_main_container">
		<img class="events_loading" src="http://sharktorrents.com/assets/img/ajax_loader.gif" />
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
			<div class="next-posts alignleft"><a href="http://sharktorrents.com/profile/?pageNo=2&cat=filter_crt&filterContent=Y" >Older Entries</a></div>
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