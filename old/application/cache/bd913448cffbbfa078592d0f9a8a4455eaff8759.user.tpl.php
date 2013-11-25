<?php /*%%SmartyHeaderCode:954650dbd9e9618d64-30847108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd913448cffbbfa078592d0f9a8a4455eaff8759' => 
    array (
      0 => 'C:\\wamp\\www\\codeIgniter\\application/views\\user.tpl',
      1 => 1356587596,
      2 => 'file',
    ),
    '87e8033f5578e768fec93054e8f30cfb38977e2d' => 
    array (
      0 => 'C:\\wamp\\www\\codeIgniter\\application/views\\header.tpl',
      1 => 1356586446,
      2 => 'file',
    ),
    '481de7fe610678bf069847f7360cf2ab8ef5d752' => 
    array (
      0 => 'C:\\wamp\\www\\codeIgniter\\application/views\\modal.tpl',
      1 => 1356584692,
      2 => 'file',
    ),
    'b0b39fd85f110dd1acd3daae214e93b6775c7a6c' => 
    array (
      0 => 'C:\\wamp\\www\\codeIgniter\\application/views\\footer.tpl',
      1 => 1356586433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '954650dbd9e9618d64-30847108',
  'cache_lifetime' => 3600,
  'has_nocache_code' => false,
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
    </script>  <style>
.google {
    background-color: #F5F5F5;
}
.ui-widget-content a {
	float:left;
	color:#0088CC;
	font-size:12px;
}
.ui-widget-content {
    text-align: left;
    font-size:12px;
}
.news{
	text-align:left;
}
.web{
	text-align:left;
}
</style>


<script src="http://www.google.com/jsapi?key=AIzaSyDzboD1N4mmhuiehuXPryFuZue977B830Q" type="text/javascript"></script>
<script type="text/javascript">
	google.load('search', '1');

	$(function() {
		$( "#tabs" ).tabs();
	});

var imageSearch;
var webSearch;
var newsSearch;
var blogSearch;
var lastSearch = 0;
$(function(){

	webSearch = new google.search.WebSearch();
	webSearch.setSearchCompleteCallback(this, webSearchComplete, [webSearch, lastSearch]);

	newsSearch = new google.search.NewsSearch();
	newsSearch.setSearchCompleteCallback(this, newsSearchComplete, [newsSearch, lastSearch]);

	var hash = window.location.hash;
	if(hash != "" && hash.length > 0) {
		if(hash.substr(0,3) == '#q=') {
			var query = hash.substr(3, hash.length-3);
			$('#query').removeClass('text-label').val(query);
			search(query);
		}
	}

	$('#query').focus();
});

function webSearchComplete (searcher, searchNum) {
	var contentDiv = document.getElementById('web-content');
	contentDiv.innerHTML = '';

    var results = searcher.results;
    var newResultsDiv = document.createElement('div');

    newResultsDiv.id = 'web-content';

	for (var i = 0; i < results.length; i++) {
      var result = results[i];
	  var resultHTML = '<div id = "web_'+i+'" style="height:auto; margin-top:5px;" class="drag"><div class="web" id="webdrag_'+i+'">';
      resultHTML += '<a href="' + result.unescapedUrl + '" target="_blank"><b>' +
                        result.titleNoFormatting + '</b></a><br/>' +
                        result.content +
                        '<div/><div/>';
      newResultsDiv.innerHTML += resultHTML;
    }
    contentDiv.appendChild(newResultsDiv);
	
	$( ".drag" ).draggable({helper: 'clone'});	
	$( "#droppable" ).droppable({
		accept: ".drag",
		drop: function( event, ui ) {				
			var draggableId = ui.draggable.attr("id");
			var droppableId = $(this).attr("id");
			//	var dropp = ui.droppable.attr("id");
			//alert(dropp);
			event.preventDefault();
			content = $(ui.draggable).html();
			$( "#droppable" ).append(content);	
		}
    });
}

function newsSearchComplete (searcher, searchNum) {
	var contentDiv = document.getElementById('news-content');
	contentDiv.innerHTML = '';

    var results = searcher.results;
    var newResultsDiv = document.createElement('div');
    newResultsDiv.id = 'news-content';
    for (var i = 0; i < results.length; i++) {
      var result = results[i];
		var resultHTML = '<div id = "news_'+i+'"  style="height:auto; margin-top:5px;" class="drag"><div class="news" id="newsdrag_'+i+'">';

		if(result.image != undefined) {
			resultHTML += '<img align="left" src="'+result.image.tbUrl+'"/>';
		}

      resultHTML += '<a class="url-news-'+i+'" title="'+result.titleNoFormatting+'" href="' + result.unescapedUrl + '" target="_blank"><b>' +
                        result.titleNoFormatting + '</b></a><br/><span class="content-news-'+i+'">' + 
					    result.content + '</span><br/></div></div>';
      newResultsDiv.innerHTML += resultHTML;
    }
    contentDiv.appendChild(newResultsDiv);

	$( ".drag" ).draggable({helper: 'clone'});
	$( "#droppable" ).droppable({
		accept: ".drag",
		drop: function( event, ui ) {				
			var draggableId = ui.draggable.attr("id");
			var droppableId = $(this).attr("id");
			//	var dropp = ui.droppable.attr("id");
			//alert(dropp);
			event.preventDefault();
			content = $(ui.draggable).html();
			$( "#droppable" ).append(content);	
		}
    });
}

function save_content()
{
	var newsid = "";
		 var content_id ="";
		 var url = "";
		 var title ="";
		 var content_data ="";
		 $($("#droppable" ).find('.news')).each(function() {
				newsid = $(this).attr('id');
				content_id =newsid.split('_');
					 url += $(".url-news-"+content_id[1]).attr('href')+'|';
					 title += $(".url-news-"+content_id[1]).attr('title')+'|';
					 content_data +=  $(".content-news-"+content_id[1]).html()+'|';

		});

}

$(document).ready(function() {
	$('#submit_btn').click(function(){
		var query = $('#query').val();
		search(query);

	});
});

function search(query) {
	if(query.length > 0) {
		$("#search-content").show();
		document.title = query + " | Real Time Search" ;
		window.location.hash = "q=" + query;
	} else {
		document.title = "Real Time Search" ;
		$("#search-content").hide();
	}

	webSearch.execute(query);
	newsSearch.execute(query);
}
</script>

<div class="row-fluid">
	<div id="droppable" class="span6 offset1 list well" style= "min-height:600px;">
			
			<!-- <div  style="float:right; margin-top:500px;"><input type="button" id="save_btn" value="Save" onClick="save_content();"/></div> -->

	</div>
	
	<div class="span4 google well" style="min-height:600px">
		<!-- <h1>this is where search will go</h1> -->
		<input type="text" placeholder="search..." class="input-home search-query" id="query" name="query">
		<button class="btn btn-success" type="submit" id='submit_btn'>GO</button>
			<div id="search-content">
				<div id="tabs">
					<ul>
						<li><a href="#web-content">Web</a></li>
						<li><a href="#news-content">News</a></li>
						<li><a href="#anytime-content">AnyTime</a></li>
					</ul>
					<div id="web-content">
						<p></p>
					</div>
					<div id="news-content">
						<p></p>
					</div>
					<div id="anytime-content">
						<p></p>
					</div>
				</div>
			</div>

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