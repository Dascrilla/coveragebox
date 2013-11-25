<?php /*%%SmartyHeaderCode:19733740150d9fea56b84c2-90624382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '814242a354fb1e63c369657a556f9503d0d24946' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/views/event_details.tpl',
      1 => 1356459461,
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
    '9b9487f0b7cff84bd1dccf2adf0f642c7433df4a' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/views/event_members.tpl',
      1 => 1356453345,
      2 => 'file',
    ),
    '9e72f3e5485040b0478ecf54971be31c521ffcc0' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/views/footer.tpl',
      1 => 1355921520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19733740150d9fea56b84c2-90624382',
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
                  <a href="http://sharktorrents.com/profile">Eric</a></p>
                <a class="thumbnail profile_pic" href="http://sharktorrents.com/profile">
                    <img alt="" src="http://graph.facebook.com/1055453038/picture">
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
    </script>  	<div class="event_container">
		<div class="event_name">Marquee Nightclub, Las Vegas, USA</div> 
		<div class="clearFloat"></div>
		<div class="inner_container">
			<img class="pic event_pic" src="http://profile.ak.fbcdn.net/hprofile-ak-snc7/372914_117461381745815_2057218387_n.jpg" />	
			<div class="right_inner_container">
				<div class="event_sub_content">
					<i class="icon-globe"></i>
										Marquee Las Vegas
									</div>
				<div class="right_sub_content">
					<i class="icon-folder-close"></i>
					Friday, December 28,G 12:00 AM
					<br>
					<i class="icon-time"></i>
					12:00 AM
				</div>
				<div class="clearFloat"></div>
				<div class="event_detail_divider"></div>
				<div class="clearFloat"></div>
								<div class="clearFloat"></div>
				<div class="event_description">
					<i class="icon-list"></i>
					<span>http://www.marqueelasvegas.com</span>					
				</div>
			</div>	
			<div class="clearFloat"></div>
		</div>

	</div>
	<div class="clearFloat"></div>
	<div class="events_main_container">
		<div class="events_main_inner_container">
		<img class="events_loading" src="http://sharktorrents.com/assets/img/ajax_loader.gif" />
		<div class="clear_float"></div>
		<div class="events_feed_container">	
			<div class="post_input_holder">
				<input type="text" class="event_post_text" eventId="117461381745815" placeholder="Write something…">		
			</div>
			<div class="clearFloat"></div>
			<div class="comment_post_splitter"></div>
			<div class="clearFloat"></div>
			<div class="posts_list_holder">
							<div class="post_main_holder">
					<a href="#" class="user_name event_poster" rel="tooltip" data-placement="top" data-original-title="Maja Bartosik">
		  				<img class="event_poster_pic" src="https://graph.facebook.com/767505438/picture?type=normal" />
		  			</a>
		  			<div class="post_right_content">
		  				<div  class="event_poster_name">
		  					Maja Bartosik
		  				</div >
		  				<div class="clearFloat"></div>
		  				<div  class="event_post_message">
		  							  						need to buy a ticket from Brisbane!
		  						
		  				</div>
		  				<div class="clearFloat"></div>
		  				<div  class="event_post_time">
		  					Tuesday, Dec 11 02:56 AM
		  				</div >
		  			</div>	
				</div>
				<div class="clearFloat"></div>
				<div class="events_post_splitter"></div>
				
		</div>
		</div>
			
		<div class="event_main_inner_right">
				 <div id="map_canvas"></div>
				 <div class="clearFloat"></div>
				 <div class="members_pic_holder">
				 		<i class="icon-user member_icon"></i>
				 		<div class="clearFloat"></div>	
				 				  			
		<a href="#" class="user_name" rel="tooltip" data-placement="top" data-original-title="Steve Hurtado">
			<img src="https://graph.facebook.com/563010496/picture?type=normal"  class="event_member_pic"/>
		</a>
		  			
		<a href="#" class="user_name" rel="tooltip" data-placement="top" data-original-title="Kyle Laplante">
			<img src="https://graph.facebook.com/1664317899/picture?type=normal"  class="event_member_pic"/>
		</a>
		  			
		<a href="#" class="user_name" rel="tooltip" data-placement="top" data-original-title="Brent Tack">
			<img src="https://graph.facebook.com/1348871286/picture?type=normal"  class="event_member_pic"/>
		</a>
		  			
		<a href="#" class="user_name" rel="tooltip" data-placement="top" data-original-title="Rouzbeh Neav">
			<img src="https://graph.facebook.com/1297734098/picture?type=normal"  class="event_member_pic"/>
		</a>
		  			
		<a href="#" class="user_name" rel="tooltip" data-placement="top" data-original-title="Maja Bartosik">
			<img src="https://graph.facebook.com/767505438/picture?type=normal"  class="event_member_pic"/>
		</a>
		  			
		<a href="#" class="user_name" rel="tooltip" data-placement="top" data-original-title="Deferran H.v.">
			<img src="https://graph.facebook.com/543215926/picture?type=normal"  class="event_member_pic"/>
		</a>
		  			
		<a href="#" class="user_name" rel="tooltip" data-placement="top" data-original-title="Siavash Tahamtan">
			<img src="https://graph.facebook.com/1844674758/picture?type=normal"  class="event_member_pic"/>
		</a>
		  			
		<a href="#" class="user_name" rel="tooltip" data-placement="top" data-original-title="Payam Mehrpooya">
			<img src="https://graph.facebook.com/100000456463775/picture?type=normal"  class="event_member_pic"/>
		</a>
		  			
		<a href="#" class="user_name" rel="tooltip" data-placement="top" data-original-title="Marcin Klama">
			<img src="https://graph.facebook.com/100001757592755/picture?type=normal"  class="event_member_pic"/>
		</a>
		  			
		<a href="#" class="user_name" rel="tooltip" data-placement="top" data-original-title="Megan Laplante">
			<img src="https://graph.facebook.com/783518241/picture?type=normal"  class="event_member_pic"/>
		</a>
		  			
		<a href="#" class="user_name" rel="tooltip" data-placement="top" data-original-title="Amirali Dolatabadi">
			<img src="https://graph.facebook.com/100000425143934/picture?type=normal"  class="event_member_pic"/>
		</a>
		  			
		<a href="#" class="user_name" rel="tooltip" data-placement="top" data-original-title="Gustavo De La Garza">
			<img src="https://graph.facebook.com/1656222294/picture?type=normal"  class="event_member_pic"/>
		</a>
		  			
		<a href="#" class="user_name" rel="tooltip" data-placement="top" data-original-title="Kaaren Orange">
			<img src="https://graph.facebook.com/1645346911/picture?type=normal"  class="event_member_pic"/>
		</a>
		  			
		<a href="#" class="user_name" rel="tooltip" data-placement="top" data-original-title="Jordi Correa De Alberti">
			<img src="https://graph.facebook.com/618959186/picture?type=normal"  class="event_member_pic"/>
		</a>
		  			
		<a href="#" class="user_name" rel="tooltip" data-placement="top" data-original-title="Oscar Garcia Perez">
			<img src="https://graph.facebook.com/100000191461270/picture?type=normal"  class="event_member_pic"/>
		</a>
		  			
		<a href="#" class="user_name" rel="tooltip" data-placement="top" data-original-title="Eli España Madrid">
			<img src="https://graph.facebook.com/100000547818330/picture?type=normal"  class="event_member_pic"/>
		</a>
				 </div>
				 <div class="clearFloat"></div>
		</div>
	  </div>
	  <div class="clearFloat"></div>				
	</div>

  <script type="text/javascript">
	function setVenuePosition() {
		venue_latitude = '36.1094618851';
		venue_longitude = '-115.174249284';	
	}  		
  </script>


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