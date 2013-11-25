
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Eventopic 2.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="{$templateData.base_url}assets/css/bootstrap.css" rel="stylesheet">
    <link href="{$templateData.base_url}assets/css/site.css" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />

    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
        background-image: url({$templateData.base_url}assets/img/subtle_dots.png);
        text-align: center;
      }
    </style>
    <link href="{$templateData.base_url}assets/css/bootstrap-responsive.css" rel="stylesheet">
    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="{$templateData.base_url}assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{$templateData.base_url}assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{$templateData.base_url}assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{$templateData.base_url}assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{$templateData.base_url}assets/ico/apple-touch-icon-57-precomposed.png">

    <script src="{$templateData.base_url}assets/js/jquery.js"></script>
    <script src="{$templateData.base_url}assets/js/bootstrap.js"></script>
    <script src="{$templateData.base_url}assets/js/jquery.ias.js"></script>
    <script src="{$templateData.base_url}assets/js/site.js"></script>
    <!-- <script src="http://code.jquery.com/jquery-1.8.3.js"></script> -->
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
  </head>

  <body>
    {include file='modal.tpl'}
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
         
         <img src={$templateData.base_url}assets/img/logo21.png alt="Eventopic" width="150" style="
        float: left;
        margin-left: 3%;">  

           {if $templateData.logged_in_user_id eq ""}
              <form class="navbar-form pull-right">
                <button type="submit" class="btn" href="#login_modal"  data-toggle="modal" id="modal-link">Login|Sign Up</button>
              </form>
            {else}
              <div class="login_user_info">
                <p  class="muted logged_user_name">Hello, 
                  <a href="{$templateData.base_url}profile">{$templateData.lastname}</a></p>
                <a class="thumbnail profile_pic" href="{$templateData.base_url}profile">
                    <img alt="" src="{$templateData.profile_pic}">
                </a>  
                <ul class="nav pull-right">
                  <li id="fat-menu" class="dropdown">
                    <a href="#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown"> <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="drop3">
                      <li><a tabindex="-1" href="#" class="log_out">Logout</a></li>
                      <li>
                        <a tabindex="-1" href="{$templateData.base_url}profile/inviteFriends" >
                          Invite Friends</a>
                      </li>                      
                    </ul>
                  </li>
                </ul>
                <!--<div class="profile_info" > 
                  
                  <p  class="muted log_out">Logout</p>
              </div>-->
            </div>
            {/if}
        </div>

      </div>
    </div>
    <div id="fb-root"></div>
    <script src="//connect.facebook.net/en_US/all.js"></script>
    <div class="container"> 
    <script type="text/javascript">
    var fb_app_id = {$templateData.fb_app_id}
    </script>  