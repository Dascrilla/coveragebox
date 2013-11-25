<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>

<script src="http://www.google.com/jsapi?key=AIzaSyDzboD1N4mmhuiehuXPryFuZue977B830Q" type="text/javascript"></script>
<script type="text/javascript">
	google.load('search', '1');
</script>
<style>
.google {
    background-color: #F5F5F5;
}
</style>

<script>
	$(function() {
	$( "#tabs" ).tabs();
	});
</script>
<SCRIPT>
var imageSearch;
var webSearch;
var newsSearch;
var blogSearch;
var lastSearch = 0;
$(function(){

	//imageSearch = new google.search.ImageSearch();
	//imageSearch.setSearchCompleteCallback(this, imgSearchComplete, null);
	/*searcher.setRestriction(google.search.Search.RESTRICT_SAFESEARCH,
	google.search.Search.SAFESEARCH_ON);
	*/

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

/*function imgSearchComplete() {
	if (imageSearch.results && imageSearch.results.length > 0) {
		var contentDiv = document.getElementById('anytime-content');
		contentDiv.innerHTML = '';

		var results = imageSearch.results;
		var newResultsDiv = document.createElement('div');
		newResultsDiv.id = 'anytime-content';
		newResultsDiv.setAttribute("style", "height:200px; margin-top:5px;");

		for (var i = 0; i < results.length; i++) {
		var result = results[i];
			var imgContainer = document.createElement('div');
			imgContainer.setAttribute("align", "left");
			imgContainer.setAttribute("class", "drag_img");

			//var title = document.createElement('div');
			//title.innerHTML = result.titleNoFormatting;

			var newLink = document.createElement('a');
			newLink.href = result.unescapedUrl
			newLink.target = "_new";
			newLink.title = result.titleNoFormatting ;

			var newImg = document.createElement('img');
			newImg.src = result.tbUrl;
			newImg.setAttribute("align", "left");

			imgContainer.setAttribute("rel", newLink.href + "__" + newLink.target + "__" + newLink.title + "_" + newImg.src);
			newLink.appendChild(newImg);

			//imgContainer.appendChild(title);
			imgContainer.appendChild(newLink);

			// Put our title + image in the content
			contentDiv.appendChild(imgContainer);
		}
		contentDiv.appendChild(newResultsDiv);
	}
}*/


function webSearchComplete (searcher, searchNum) {
	var contentDiv = document.getElementById('web-content');
	contentDiv.innerHTML = '';

    var results = searcher.results;
    var newResultsDiv = document.createElement('div');

    newResultsDiv.id = 'web-content';

	for (var i = 0; i < results.length; i++) {
      var result = results[i];
	  var resultHTML = '<div id = "web_'+i+'" style="height:auto; margin-top:5px;" class="drag_web"><div class="web" id="webdrag_'+i+'">';
      resultHTML += '<a href="' + result.unescapedUrl + '" target="_blank"><b>' +
                        result.titleNoFormatting + '</b></a><br/>' +
                        result.content +
                        '<div/><div/>';
      newResultsDiv.innerHTML += resultHTML;
    }
    contentDiv.appendChild(newResultsDiv);
	
	$( ".drag_web" ).draggable({helper: 'clone'});
	/*$( "#droppable" ).droppable({
		//accept: ".drag_web",
		drop: function( event, ui ) {
				drag = $(ui.draggable).attr('rel');
				event.preventDefault();
		}
    });*/
}

function newsSearchComplete (searcher, searchNum) {
	var contentDiv = document.getElementById('news-content');
	contentDiv.innerHTML = '';

    var results = searcher.results;
    var newResultsDiv = document.createElement('div');
    newResultsDiv.id = 'news-content';
    for (var i = 0; i < results.length; i++) {
      var result = results[i];
		var resultHTML = '<div id = "news_'+i+'"  style="height:auto; margin-top:5px;" class="drag_news"><div class="news" id="newsdrag_'+i+'">';

		if(result.image != undefined) {
			resultHTML += '<img align="left" src="'+result.image.tbUrl+'"/>';
		}

      resultHTML += '<a class="url-news-'+i+'" title="'+result.titleNoFormatting+'" href="' + result.unescapedUrl + '" target="_blank"><b>' +
                        result.titleNoFormatting + '</b></a><br/><span class="content-news-'+i+'">' + 
					    result.content + '</span><br/></div></div>';
      newResultsDiv.innerHTML += resultHTML;
    }
    contentDiv.appendChild(newResultsDiv);

	$( ".drag_news" ).draggable({helper: 'clone'});
	$( "#droppable" ).droppable({
		accept: ".drag_news",
		drop: function( event, ui ) {				
				var draggableId = ui.draggable.attr("id");
				var droppableId = $(this).attr("id");
				//	var dropp = ui.droppable.attr("id");
				//alert(dropp);
				event.preventDefault();
				content = $(ui.draggable).html();
				$( "#droppable" ).append(content);	
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

	//imageSearch.execute(query);
	webSearch.execute(query);
	newsSearch.execute(query);
}
</script>

<div class="row-fluid">
	<div id="droppable" class="span6 offset1 list well" style= "min-height:600px;">
			<h1>this is where table will go</h1>
			<div  style="float:right; margin-top:500px;"><input type="button" value="Save"/></div>

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

