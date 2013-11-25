<?php /*%%SmartyHeaderCode:89471989650da01fab4f167-87725863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23402ac80e8b21da2a9f0e0a796b3da6c5272a09' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/views/invite_friends.tpl',
      1 => 1355911080,
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
    '6407847a6afb8f9f5ef5524156fab1473adbbc03' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/views/friendslist.tpl',
      1 => 1354582380,
      2 => 'file',
    ),
    '9e72f3e5485040b0478ecf54971be31c521ffcc0' => 
    array (
      0 => '/hermes/web10/b822/moo.sharktorrentscom/eventopic2/application/views/footer.tpl',
      1 => 1355921520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89471989650da01fab4f167-87725863',
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
    </script>  	<div class="profile_container">
		<h2 class="title">
				Invite your friends to Eventopic						
		</h2>
		<a href="#" class="connect-btn">
					<span><i class="icon-envelope"></i>Send Invitations</span>
		</a>
		<div class="clearFloat"></div>
		<div class="inner_container invite">
			<form class="form-inline invite_form">
				<input type="text" class="input-large" id="search_name" placeholder="Search Friends...">
			</form>	
			<div class="clearFloat"></div>
			
			<ul class="friendsListUL">		
												
		<li data-facebook-id="500235835" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/500235835/picture">
			<p>Dimitri Georges</p>
			<i class="icon-plus-sign"></i>
		</li>
		
										
		<li data-facebook-id="500776021" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/500776021/picture">
			<p>Sam Jordan</p>
			<i class="icon-plus-sign"></i>
		</li>
		
					<div class="friend_minidesktop friend"></div>
										
		<li data-facebook-id="500832565" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/500832565/picture">
			<p>Josh Goldenboy</p>
			<i class="icon-plus-sign"></i>
		</li>
					<div class="friend_desktop friend"></div>
		
										
		<li data-facebook-id="500918184" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/500918184/picture">
			<p>Mateo Peña Doll</p>
			<i class="icon-plus-sign"></i>
		</li>
		
					<div class="friend_minidesktop friend"></div>
										
		<li data-facebook-id="500928625" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/500928625/picture">
			<p>Dashiel Johnson</p>
			<i class="icon-plus-sign"></i>
		</li>
		
										
		<li data-facebook-id="501002032" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/501002032/picture">
			<p>Owen Lionel</p>
			<i class="icon-plus-sign"></i>
		</li>
					<div class="friend_desktop friend"></div>
		
					<div class="friend_minidesktop friend"></div>
										
		<li data-facebook-id="501110361" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/501110361/picture">
			<p>Ja'mie Kent</p>
			<i class="icon-plus-sign"></i>
		</li>
		
										
		<li data-facebook-id="501187340" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/501187340/picture">
			<p>Sorcha Evenhouse</p>
			<i class="icon-plus-sign"></i>
		</li>
		
					<div class="friend_minidesktop friend"></div>
										
		<li data-facebook-id="502806083" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/502806083/picture">
			<p>Sarah Rothenberg</p>
			<i class="icon-plus-sign"></i>
		</li>
					<div class="friend_desktop friend"></div>
		
										
		<li data-facebook-id="504310764" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/504310764/picture">
			<p>Olivia Anton</p>
			<i class="icon-plus-sign"></i>
		</li>
		
					<div class="friend_minidesktop friend"></div>
										
		<li data-facebook-id="504322557" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/504322557/picture">
			<p>Caro von Herrmann</p>
			<i class="icon-plus-sign"></i>
		</li>
		
										
		<li data-facebook-id="504389685" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/504389685/picture">
			<p>Nick Singer</p>
			<i class="icon-plus-sign"></i>
		</li>
					<div class="friend_desktop friend"></div>
		
					<div class="friend_minidesktop friend"></div>
										
		<li data-facebook-id="504555651" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/504555651/picture">
			<p>Essie Barrow</p>
			<i class="icon-plus-sign"></i>
		</li>
		
										
		<li data-facebook-id="504720706" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/504720706/picture">
			<p>Molly Wynona</p>
			<i class="icon-plus-sign"></i>
		</li>
		
					<div class="friend_minidesktop friend"></div>
										
		<li data-facebook-id="506332868" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/506332868/picture">
			<p>Jackson Walters</p>
			<i class="icon-plus-sign"></i>
		</li>
					<div class="friend_desktop friend"></div>
		
										
		<li data-facebook-id="506597100" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/506597100/picture">
			<p>Amos Terry</p>
			<i class="icon-plus-sign"></i>
		</li>
		
					<div class="friend_minidesktop friend"></div>
										
		<li data-facebook-id="506778135" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/506778135/picture">
			<p>Julia Remer</p>
			<i class="icon-plus-sign"></i>
		</li>
		
										
		<li data-facebook-id="508166956" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/508166956/picture">
			<p>Jordan Peden</p>
			<i class="icon-plus-sign"></i>
		</li>
					<div class="friend_desktop friend"></div>
		
					<div class="friend_minidesktop friend"></div>
										
		<li data-facebook-id="509839263" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/509839263/picture">
			<p>Cole Crossen</p>
			<i class="icon-plus-sign"></i>
		</li>
		
										
		<li data-facebook-id="510970041" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/510970041/picture">
			<p>Liam Karl Mundt</p>
			<i class="icon-plus-sign"></i>
		</li>
		
					<div class="friend_minidesktop friend"></div>
										
		<li data-facebook-id="511108258" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/511108258/picture">
			<p>Ànnié Obèndorf</p>
			<i class="icon-plus-sign"></i>
		</li>
					<div class="friend_desktop friend"></div>
		
										
		<li data-facebook-id="511740223" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/511740223/picture">
			<p>Collin Maguire</p>
			<i class="icon-plus-sign"></i>
		</li>
		
					<div class="friend_minidesktop friend"></div>
										
		<li data-facebook-id="516896938" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/516896938/picture">
			<p>Oliver Miles</p>
			<i class="icon-plus-sign"></i>
		</li>
		
										
		<li data-facebook-id="517550006" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/517550006/picture">
			<p>Andrew Jordan</p>
			<i class="icon-plus-sign"></i>
		</li>
					<div class="friend_desktop friend"></div>
		
					<div class="friend_minidesktop friend"></div>
										
		<li data-facebook-id="518913596" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/518913596/picture">
			<p>Alex Goody</p>
			<i class="icon-plus-sign"></i>
		</li>
		
										
		<li data-facebook-id="520554015" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/520554015/picture">
			<p>Jessica Roach</p>
			<i class="icon-plus-sign"></i>
		</li>
		
					<div class="friend_minidesktop friend"></div>
										
		<li data-facebook-id="522303552" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/522303552/picture">
			<p>Alex Goussen</p>
			<i class="icon-plus-sign"></i>
		</li>
					<div class="friend_desktop friend"></div>
		
										
		<li data-facebook-id="522671910" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/522671910/picture">
			<p>Vincent Phua</p>
			<i class="icon-plus-sign"></i>
		</li>
		
					<div class="friend_minidesktop friend"></div>
										
		<li data-facebook-id="523831626" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/523831626/picture">
			<p>Nick Teebay</p>
			<i class="icon-plus-sign"></i>
		</li>
		
										
		<li data-facebook-id="525913651" class="friend">
			<img width="50" height="50" alt="Madhura Alva" src="https://graph.facebook.com/525913651/picture">
			<p>Roberto Vago</p>
			<i class="icon-plus-sign"></i>
		</li>
					<div class="friend_desktop friend"></div>
		
					<div class="friend_minidesktop friend"></div>
					</ul>
			<div class="navigation">
				<div class="previous-posts alignright"></div>
				<div class="next-posts alignleft"><a href="http://sharktorrents.com/profile/inviteFriends/2" >Older Entries</a></div>
			</div>
			
			<div class="clearFloat"></div>
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