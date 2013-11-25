<?php /* Smarty version Smarty-3.0.8, created on 2012-12-27 05:53:20
         compiled from "C:\wamp\www\codeIgniter\application/views\user.tpl" */ ?>
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
  ),
  'nocache_hash' => '954650dbd9e9618d64-30847108',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $sha = sha1('header.tpl' . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template('header.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
<style>
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
<?php $sha = sha1('footer.tpl' . $_smarty_tpl->cache_id . $_smarty_tpl->compile_id);
if (isset($_smarty_tpl->smarty->template_objects[$sha])) {
$_template = $_smarty_tpl->smarty->template_objects[$sha]; $_template->caching = 9999; $_template->cache_lifetime =  null;
} else {
$_template = new Smarty_Internal_Template('footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null);
}
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
