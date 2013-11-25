<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?=site_name()?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Styles -->

	 <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui-10.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-responsive.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/jdpicker.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/theme.blue.css" />


    <style type="text/css">
      .sidebar-nav {
          padding: 9px 0;
      }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    
    
	<script src="<?php echo base_url(); ?>js/jquery-1..8.3.min.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery-ui.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.jdpicker.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.tablesorter.js"></script>


<!-- <script src="<?php //echo base_url(); ?>js/bootstrap.js"></script> 
	<script src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-button.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap-typeahead.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.ias.js"></script>
    <script src="<?php echo base_url(); ?>js/site.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery-1.8.3.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery-ui.js"></script>-->

  </head>

  <body>
  
  <div class="container">

     <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="nav-container">
         
          <?php echo anchor('/', site_name(), array('class'=>"brand"));?>
		  <?php if ($this->tank_auth->is_logged_in()) { 
			$username = $this->tank_auth->get_username();
			?>

       <ul class="nav">
              <li><a href="<?php echo base_url(); ?>user/profile"> <i class="icon-user"></i>Profile</a></li>
              <li><a href="<?php echo base_url(); ?>coverage/search"> <i class="icon-list-alt"></i> Coverage</a></li>
            </ul>


			 <div class="btn-group pull-right">

				<a class="btn btn" <a href="<?php echo base_url(); ?>"> <i class="icon-home"></i> <?php echo $username;?></a>
				<a class="btn btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="<?php echo base_url(); ?>user/profile"><i class="icon-user"></i>Profile</a></li>
					<li><a href="<?php echo base_url(); ?>coverage/search"><i class="icon-list-alt"></i>Coverage</a></li>
					<li class="divider"></li>
					<li><a href="<?php echo base_url(); ?>auth/logout"><i class="icon-signout"></i>Logout</a></li>
				  </ul>
			  </div>


		   <?php }else{ ?>
					  <ul class="nav pull-right">
						  <li><a href="<?php echo base_url(); ?>auth/login">Login</a></li>
						  <li><a href="<?php echo base_url(); ?>auth/register">Sign Up</a></li>
					  </ul>
		   <?php   } ?>
        </div>
      </div>
    </div>
    <hr>
	
