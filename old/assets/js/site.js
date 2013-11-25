	home_url = window.location.protocol+"//"+window.location.hostname;
	ajax_busy_html = '<img src="'+home_url+'/assets/img/ajax_loader.gif/>';

	var venue_latitude = '';
	var venue_longitude = '';
	FB.init({
      appId      : fb_app_id,
      status     : true, // check the login status upon init?
      cookie     : true, // set sessions cookies to allow your server to access the session?
      xfbml      : true  // parse XFBML tags on this page?
    });

	 function showRegistrationPopup() {
	 	str = '<iframe  src="'+home_url+'/account/renderFbRegistration" scrolling="auto" frameborder="no" allowTransparency="true" width="400" height="350">';
    	jQuery("#login_modal .fb_login_div").html(str);
    	return false;
	 }

	 function fbLogin() {
		FB.login(function(response) {
			if (response.authResponse) {
				var uid = response.authResponse.userID;
			    var accessToken = response.authResponse.accessToken;
			    jQuery.ajax({
				  type: "POST",
				  dataType:"json",
				  url: home_url+"/account/checkUserExisting/"+response.authResponse.userID+"/"+accessToken,
				}).done(function( data ) {
				  if(data.status == 'Existing') {
				  	location.href=home_url+"/profile";
				  }else{
				  	jQuery('#login_modal').modal('show');
				  	showRegistrationPopup();
				  }	
				  
				});
			} else {
				console.log('User cancelled login or did not fully authorize.');
			}
		}, {scope: 'user_photos,friends_events,publish_stream,user_events,user_location,user_hometown,user_online_presence,friends_online_presence,read_stream'});
	 }
	 
	 function fbLoginStatus() {
	 	FB.getLoginStatus(function(response) {
			  if (response.status === 'connected') {
			  	fbLogin();			    
			  } else if (response.status === 'not_authorized') {
			  	jQuery('#login_modal').modal('show');
			    showRegistrationPopup();
			  } else {
				fbLogin();
			  }
	 	});	
	 }

	 function email_register(obj,event){
	 	if(jQuery.trim(jQuery("#login_modal").find("#user_reg_email").val()) == "") {
	 		jQuery("#login_modal").find("#user_reg_email").next().show();
	 		jQuery("#login_modal").find("#user_reg_email").parents(".control-group").addClass('error');
	 		return false;
	 	}

	 	if(jQuery.trim(jQuery("#login_modal").find("#user_reg_password").val()) == "") {
	 		jQuery("#login_modal").find("#user_reg_password").next().show();
	 		jQuery("#login_modal").find("#user_reg_password").parents(".control-group").addClass('error');
	 		return false;
	 	}
	 	if(jQuery(obj).text() == 'New User') {
	 		if(jQuery.trim(jQuery("#login_modal").find("#user_reg_username").val()) == "") {
		 		jQuery("#login_modal").find("#user_reg_username").next().show();
		 		jQuery("#login_modal").find("#user_reg_username").parents(".control-group").addClass('error');
		 		return false;
	 		}	
	 	}
	 	

	 	jQuery(".ajax_busy").show();
		jQuery.ajax({
		  type: "POST",
		  dataType:"json",
		  data:{urlString:jQuery("#login_modal").find("#user_reg_username").val()+"/"+jQuery("#login_modal").find("#user_reg_email").val()
		  +"/"+jQuery("#login_modal").find("#user_reg_password").val()+"/"+jQuery(obj).text()},
		  url: home_url+"/account/emailRegistration/",
		}).done(function( data ) {
			jQuery(".ajax_busy").hide();
			if(data.status == 'success') {
				location.href=home_url+"/profile";
			}else{
				jQuery(".invalid_cred").show();
			}
		  
		});
	 }

	 function siteLogout() {
	 	jQuery.ajax({
		  type: "POST",
		  dataType:"json",		 
		  url: home_url+"/account/logout/",
		}).done(function( data ) {
				location.reload();  
		});
		FB.logout(function(response) {
  			// user is now logged out
		});
	 }

	 function searchFriends(obj,event){
	 	jQuery.ajax({
		  type: "POST",
		  dataType:"json",		 
		  url: home_url+"/profile/searchFriends/"+jQuery("#search_name").val(),
		}).done(function( data ) {
				jQuery(".friendsListUL").html(data.html);  

				jQuery(".invite li").unbind('click').bind('click',function(e){
					jQuery(this).toggleClass('selected');
					jQuery(this).find("i").toggleClass('icon-plus-sign').toggleClass('icon-ok-sign');
					return false;			
				});
		});
	 }

    function setInvitePageEvents() {
    	jQuery(".invite li").unbind('click').bind('click',function(e){
				jQuery(this).toggleClass('selected');
				jQuery(this).find("i").toggleClass('icon-plus-sign').toggleClass('icon-ok-sign');
				return false;			
		});
    } 
    var filter_crt = 'user';
    function getEventFilterContents(obj,event) {
    	jQuery.ajax({
		  type: "POST",
		  dataType:"html",		 
		  url: home_url+"/profile/?cat="+filter_crt+"&filterContent=Y",
		}).done(function( data ) {	
				jQuery(".events_loading").hide();			
				jQuery(".events_container").html(data); 
				$('.user_name').tooltip();
				attachScrollEvent();
		});
    }

    // Additional initialization code such as adding Event Listeners goes here
    jQuery(document).ready(function(){
    	$('#login_modal').on('show', function () {
    		jQuery(".help-inline").hide();
    		jQuery("#login_modal .modal-body").html(jQuery(".auth_popup").html());
    		jQuery(".fb_register_img").click(function(){
				fbLoginStatus();				
			});	
			jQuery(".email_signin").click(function(e){
				email_register(this,e);				
			});
    	});
    	jQuery(".log_out").click(function(e){
				siteLogout(this,e);	
				return false;			
		});

		jQuery(".filter_name").click(function(e){
				jQuery('.events_container').infinitescroll("destroy");
				filter_crt = jQuery(this).attr('filterCat');
				jQuery(".filter_name").removeClass('selected');
				jQuery(this).addClass('selected');
				jQuery(".events_loading").show();
				getEventFilterContents(this,e);	
				return false;			
		});

		jQuery(".searchFriends").click(function(e){
				searchFriends(this,e);	
				return false;			
		});

		jQuery(".site_login_btn").click(function(e){
				fbLoginStatus(this,e);	
				return false;			
		});

		jQuery("#search_name").keyup(function(e){
				searchFriends(this,e);	
				return false;			
		});

		if(location.search.indexOf("closeModal")!= -1 ){
		    jQuery('#login_modal').modal('hide');
		}		

		if(location.search.indexOf("showLogin")!= -1 ){
		    jQuery('#login_modal').modal('show');
		}

		if(location.search.indexOf("app_request_type") != -1 ){
		    jQuery('#login_modal').modal('show');
		    jQuery(".fb_register_img").trigger('click');
		}
	

		jQuery(".connect-btn").click(function(e){
				sendRequestToRecipients();
				return false;			
		});

		jQuery(".event_post_text").keydown(function(e){
			if(e.keyCode == '13') {
				jQuery(".event_post_text").unbind('keydown');
				event_post_feed(this,e);
			}								
		});

		

		$('.user_name').tooltip();

		if(location.href.indexOf("profile/inviteFriends")!= -1 ){
			setInvitePageEvents();
			
			jQuery('.friendsListUL').infinitescroll({			 
			    navSelector  : ".navigation",            
			    nextSelector : ".navigation a:first",    
			    itemSelector : ".friend",
			    finishedMsg: '<div class="clearFloat"></div><em>All Friends Loaded</em>',
			    dataType:'html',
			    loading: {
			    	img: home_url+"/assets/img/ajax_loader.gif",
			    	msgText:"Loading more friends..."
			    }
				},function(arrayOfNewElems){ 
      				//jQuery('<div class="clearFloat"></div>').insertAfter('.friendsListUL li:last');
      				setInvitePageEvents();
				}         
			);
		}

		loadScript();

		if (location.href.match("profile$") || location.href.match("profile/$") || location.pathname.match("profile$")) {
 			 attachScrollEvent();
 			 jQuery(".event_filters .selected").trigger('click');
		}	



	});  

	function event_post_feed(obj,event) {
		jQuery.ajax({
		  type: "POST",
		  dataType:"html",	
		  data:{message:jQuery(".event_post_text").val()},	 
		  url: home_url+"/event/postFeed/"+jQuery(obj).attr('eventId'),
		}).done(function( data ) {	
				location.reload();
		});
	}

	function attachScrollEvent() {
		jQuery('.events_container').infinitescroll("destroy");
		jQuery('.events_container').infinitescroll({			 
			    navSelector  : ".navigation",            
			    nextSelector : ".navigation a:first",    
			    itemSelector : ".event_holder",
			    finishedMsg: '<div class="clearFloat"></div><em>All Events Loaded</em>',
			    dataType:'html',
			    loading: {
			    	img: home_url+"/assets/img/ajax_loader.gif",
			    	msgText:"Loading more events...",
			    	finishedMsg:'<div class="clearFloat"></div><em>All Events Loaded</em>'
			    }
				},function(arrayOfNewElems){ 
      				$('.user_name').tooltip();
      				if(arrayOfNewElems.length == 0) {
      					jQuery('.events_container').infinitescroll("destroy");
      				}
				}         
			);
	}

	function sendRequestToRecipients() {
		useridList = new Array();
        jQuery(".selected").each(function(){
        	useridList.push(jQuery(this).attr('data-facebook-id'));
        });
        
        FB.ui({method: 'apprequests',
          message: 'Great Place for Managing Events',
          to: useridList.join(",")
        }, requestCallback);
    }
      
    function requestCallback(response) {
        // Handle callback here
        location.href = home_url;
    }

 var urlVal = window.location.href;
 $.extend({
      getUrlVars: function(){
        var vars = [], hash;
        var hashes = urlVal.slice(window.location.href.indexOf('?') + 1).split('&');
        for(var i = 0; i < hashes.length; i++)
        {
          hash = hashes[i].split('=');
          vars.push(hash[0]);
          vars[hash[0]] = hash[1];
        }
        return vars;
      },
      getUrlVar: function(name){
        return $.getUrlVars()[name];
      }
    });


 /* google maps loading */

 function initialize() {
  setVenuePosition();	
  var mapOptions = {
    zoom: 8,
    center: new google.maps.LatLng(venue_latitude, venue_longitude),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
}

function loadScript() {
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyAAU9jtsY63QdIYzlPEOaBxWGwcYVdleKM&sensor=true&callback=initialize";
  document.body.appendChild(script);
}

