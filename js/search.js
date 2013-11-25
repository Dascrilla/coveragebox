$(function() {
	$('#mytab a').click(function () {
		event.preventDefault();
		//$(this).tab('show');
    })
	$( "#tabs" ).tabs();
});

function tabclick(e) {
		var tabtype = e.innerHTML;
		if(tabtype == 'Web') {
			$('#news-pagination').hide();
			$('#web-pagination').show();

		} else if(tabtype == 'News') {
			$('#web-pagination').hide();
			$('#news-pagination').show();
		}
}

function getDomainName(url){
	var sourceString = url.replace('http://','').replace('https://','').replace('www.','').split(/[/?#]/)[0];
	sitename = sourceString.substring(0, sourceString.lastIndexOf("."));
	var re = /.co/;
	if(re.test(sitename)){
		sitename = sitename.substring(0, sitename.lastIndexOf("."));
	}
	
	names = sitename.split('.');
	var formatted_name = '';
	for(i=0; i<names.length;i++){
		formatted_name += format_names(names[i]);
	}

	return formatted_name;
	
}
function format_names(str){
	return str.charAt(0).toUpperCase() + str.slice(1);
}


$(function() {	
	load_listing();
});


function clear_all(){
		if(listing){
			$('.drag_box').nextAll().remove();
			$(".exist").each(function() {
				$(this).removeClass('exist');
				$(this).draggable( "option", "disabled", false );
			});
			var new_entry_data = new Array();
			var raw_data = new Array();
			validate = false;
		
		}else{
			$('table#droppable > tbody > tr').not(':last').remove();
			$(".exist").each(function() {
				$(this).removeClass('exist');
				$(this).draggable( "option", "disabled", false );
			});
			
			var new_entry_data = new Array();
			var raw_data = new Array();
			validate = false;
			//alert($('#listing_dropdown').val());
		}
}



var option = {
	publisher: 'Publication',
	author: 'Author',
	title : 'Title',
	unescapedUrl : 'Url',
	publishedDate : 'Date'
};

var page = 1;
var imageSearch;
var webSearch;
var newsSearch;
var blogSearch;
var lastSearch = 0;
var new_entry_data = new Array();

$(function(){

	webSearch = new google.search.WebSearch();
	webSearch.setSearchCompleteCallback(this, webSearchComplete, [webSearch, lastSearch]);
	webSearch.setResultSetSize(google.search.Search.LARGE_RESULTSET); 

	newsSearch = new google.search.NewsSearch();
	newsSearch.setSearchCompleteCallback(this, newsSearchComplete, [newsSearch, lastSearch]);
	newsSearch.setResultSetSize(google.search.Search.LARGE_RESULTSET); 
	  

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

function gotoPage(page_number,type){
	
	if(type == 'web'){
			webSearch.gotoPage(page_number);
			$('#active_page_number').val(page_number);
		} else if(type == 'news'){
			newsSearch.gotoPage(page_number);		
			$('#active_page_number').val(page_number);
	}	
} 

function addPaginationLinks(type) {
	if(type == 'web') {
		var cursor = webSearch.cursor;
	} else if(type == 'news') {
		var cursor = newsSearch.cursor;
	}
	
	var curPage = 0; 
	var pagesDiv = document.createElement('ul');
	for (var i = 0; i < cursor.pages.length; i++) {
		var page = cursor.pages[i];
		if (cursor.currentPageIndex == i) { // if we are on the curPage, then don't make a link
			//var label = document.createTextNode(' ' + page.label + ' ');
			//pagesDiv.appendChild(label);
			var list = document.createElement('li');
			var link = document.createElement('a');
			link.style.color = '#000';
		} else {
			// If we aren't on the current page, then we want a link to this page.
			// So we create a link that calls the gotoPage() method on the searcher.
			var list = document.createElement('li');
			var link = document.createElement('a');
		}
		$('#active_page_number').val(i);
		if(type == 'web'){
			link.href = 'javascript:gotoPage('+i+',"web");';
		} else if(type == 'news'){
			link.href = 'javascript:gotoPage('+i+',"news");';
		}
		link.innerHTML = page.label;
		link.style.marginRight = '2px';
		pagesDiv.appendChild(list);
		list.appendChild(link);
	}
	
	if(type == 'web'){
		var contentDiv1 = document.getElementById('web-pagination');
	} else if(type == 'news') {
		var contentDiv1 = document.getElementById('news-pagination');
	}
	// ADDED THIS WHILE TO CLEAR OLD PAGE SETS
	while(contentDiv1.firstChild){
	contentDiv1.removeChild(contentDiv1.firstChild);
	}
	contentDiv1.appendChild(pagesDiv);
}

function browser_detection() {
		var nVer = navigator.appVersion;
		var nAgt = navigator.userAgent;
		var browserName  = navigator.appName;
		var fullVersion  = ''+parseFloat(navigator.appVersion); 
		var majorVersion = parseInt(navigator.appVersion,10);
		var nameOffset,verOffset,ix;

		// In Opera, the true version is after "Opera" or after "Version"
		if ((verOffset=nAgt.indexOf("Opera"))!=-1) {
		 browserName = "Opera";
		 fullVersion = nAgt.substring(verOffset+6);
		 if ((verOffset=nAgt.indexOf("Version"))!=-1) 
		   fullVersion = nAgt.substring(verOffset+8);
		}
		// In MSIE, the true version is after "MSIE" in userAgent
		else if ((verOffset=nAgt.indexOf("MSIE"))!=-1) {
		 browserName = "Microsoft Internet Explorer";
		 fullVersion = nAgt.substring(verOffset+5);
		}
		// In Chrome, the true version is after "Chrome" 
		else if ((verOffset=nAgt.indexOf("Chrome"))!=-1) {
		 browserName = "Chrome";
		 fullVersion = nAgt.substring(verOffset+7);
		}
		// In Safari, the true version is after "Safari" or after "Version" 
		else if ((verOffset=nAgt.indexOf("Safari"))!=-1) {
		 browserName = "Safari";
		 fullVersion = nAgt.substring(verOffset+7);
		 if ((verOffset=nAgt.indexOf("Version"))!=-1) 
		   fullVersion = nAgt.substring(verOffset+8);
		}
		// In Firefox, the true version is after "Firefox" 
		else if ((verOffset=nAgt.indexOf("Firefox"))!=-1) {
		 browserName = "Firefox";
		 fullVersion = nAgt.substring(verOffset+8);
		}
		// In most other browsers, "name/version" is at the end of userAgent 
		else if ( (nameOffset=nAgt.lastIndexOf(' ')+1) < 
				  (verOffset=nAgt.lastIndexOf('/')) ) 
		{
		 browserName = nAgt.substring(nameOffset,verOffset);
		 fullVersion = nAgt.substring(verOffset+1);
		 if (browserName.toLowerCase()==browserName.toUpperCase()) {
		  browserName = navigator.appName;
		 }
		}
		// trim the fullVersion string at semicolon/space if present
		if ((ix=fullVersion.indexOf(";"))!=-1)
		   fullVersion=fullVersion.substring(0,ix);
		if ((ix=fullVersion.indexOf(" "))!=-1)
		   fullVersion=fullVersion.substring(0,ix);

		majorVersion = parseInt(''+fullVersion,10);
		if (isNaN(majorVersion)) {
		 fullVersion  = ''+parseFloat(navigator.appVersion); 
		 majorVersion = parseInt(navigator.appVersion,10);
		}

		return browserName;
}


function renderResult(results, type){
	var browser_name = browser_detection();

	if (results.length > 0) {
		var contentDiv = document.getElementById( type+ '-content');
		contentDiv.innerHTML = '';

		while(contentDiv.firstChild){
			contentDiv.removeChild(contentDiv.firstChild);
		}
		var newsResultsDiv = document.createElement('div');

		for (var i = 0; i < results.length; i++) {
			var result = results[i];
		
			if(browser_name == 'Chrome' || browser_name == 'Safari'){
				var data_results= '';
			}else  {
				var data_results= JSON.stringify(result);
			}

			var currentTime = new Date()
			var month = currentTime.getMonth() + 1;
			var day = currentTime.getDate();
			var yr =  String(currentTime.getFullYear());
			var year = yr.substring(2);
			var id = $('#active_page_number').val()+''+i;

			var hiddenData = '<div style="display:none;" >';
			hiddenData     += '<table><tr title="'+id+'" rel="'+type+'" class="content_to_drop" id = "content_' + type + '_'+id+'">';
			
			$.each(option, function(header,label ){
				if(header == 'publisher'){
					if(typeof(result.publisher)!='undefined'){
						hiddenData     += '<td id="'+type+'-publisher-'+id+'" rel="'+result.publisher+'">'+result.publisher+'</td>';
					}else{
						/*hiddenData     += '<td><input value="'+getDomainName(result.unescapedUrl)+'" type="text" id="'+type+'-publisher-'+id+'" class="required" size="20" style="width:90px;" placeholder="Publisher"></td>';*/
						hiddenData     += '<td id="'+type+'-publisher-'+id+'" >'+getDomainName(result.unescapedUrl)+'</td>';
					}
				}else if(header == 'author'){
					if(typeof(result.author)!='undefined'){
						hiddenData     += '<td>'+result.author+'</td>';
					}else{
						hiddenData     += '<td><input type="text" size="20" id="'+type+'-author-'+id+'" class="required" name="" style="width:80px;" placeholder="Author"></td>';
					}				
				}else if(header == 'title'){
					hiddenData     += '<td><span id="'+type+'-title-'+id+'">'+result.titleNoFormatting+ '</span>';
					hiddenData	   += '<span style="display:none" class="link-'+type+'-'+id+'" >'+ result.unescapedUrl +'</span>';
					hiddenData	   += '<span style="display:none" class="content-'+type+'-'+id+'" >'+ result.content +'</span>';
					hiddenData     += '<span style="display:none" class="raw-data-'+type+'-'+id+'" >'+ data_results +'</span>';
					hiddenData     += '</td>';
				}
				/*else if(header == 'unescapedUrl'){
					if(typeof(result.unescapedUrl)!='undefined'){
						hiddenData     += '<td>'+result.unescapedUrl+'</td>';
					}else{
						hiddenData     += '<td><input type="text" size="20" id="'+type+'-url-'+id+'" class="required" name="" style="width:80px;" placeholder="url"></td>';
					}	
				}*/
				
				else if(header == 'publishedDate'){
					if(typeof(result.publishedDate)!='undefined'){
						//var d = date('Y-m-d h:m:s',strtotime(result.publishedDate));
						Xmas95 = new Date(result.publishedDate);
						day		= Xmas95.getDate();
						month	= Xmas95.getMonth() + 1;
						yr	= String(Xmas95.getFullYear());
						year = yr.substring(2);
						if(listing){
							hiddenData     += '<td colspan=2>'+ month + '/' + day + '/' + year +'</td>';
						} else {
						hiddenData     += '<td>'+ month + '/' + day + '/' + year +'</td>';
						 } 
					}else{
						if(listing){
							hiddenData     += '<td colspan=2>'+ month + '/' + day + '/' + year +'</td>';
						} else {
							hiddenData     += '<td>'+ month + '/' + day + '/' + year +'</td>';
						} 
					}
				}
			});	

			
			hiddenData     += '</tr></table>';
			hiddenData     += '</div>';
					
			var resultHTML = '<div id = "' + type + '_'+id+'" style="height:auto; margin-top:5px;text-align: justify;" class="drag"><div   id="'+type+'drag_'+id+'" >';

			if(result.image != undefined) {
				resultHTML += '<img align="left" src="'+result.image.tbUrl+'"/>';
			}

			resultHTML += hiddenData ;
			resultHTML += '<a class="url-web-'+i+'" href="' + result.unescapedUrl + '" title="'+result.titleNoFormatting+ '" target="_blank"><b><i>' + getDomainName(result.unescapedUrl) + '&nbsp;:&nbsp;</i>'+
					result.titleNoFormatting + '</b></a><br/><span class="content-'+type+'-'+id+'">' + 
					result.content + '</span><div/><div/>';
			newsResultsDiv.innerHTML += resultHTML;
		}
			contentDiv.appendChild(newsResultsDiv);
			addPaginationLinks(type);

			$( ".drag" ).draggable({helper: 'clone'});	
			$( "#droppable" ).droppable({
				accept: ".drag",
				drop: function( event, ui ) {		
					var draggableId = ui.draggable.attr("id");
					$('#'+draggableId).addClass('exist');
					$('#'+draggableId).draggable( "option", "disabled", true );
					var droppableId = $(this).attr("id");
					event.preventDefault();
					//content = $(ui.draggable).html();
					//content = '';
					content = $('#content_'+draggableId).parent().html();
					//$( "#droppable" ).append(content);	
					//$( "#droppable tbody:last").before(content);
					$('#droppable tbody:first').append(content);
					if(!listing) {
						$('#droppable').tablesorter({
							cssInfoBlock   : "no-sort",
							//usNumberFormat : false,
							//sortReset      : true,
							//sortRestart    : true
							//debug: true
						});	
						$('#search_container').bind('click',function(){
							$('#droppable').tablesorter();	
						});
					}
				}
			});
	}
}


function webSearchComplete (searcher, searchNum) {
	var results = searcher.results;
	renderResult(results, 'web',searchNum);
}

function newsSearchComplete (searcher, searchNum) {	
	var results = searcher.results;
	renderResult(results, 'news',searchNum);	
}

function load_listing(){
	var query_string = $('#search_string').val();

		$.ajax({
			url: base_url+"coverage/get_listing/"+query_string,
			dataType: 'html',
			success: function(response, textStatus){
					$('#listing_autocomplete').html(response);
				},
			error:  function() {
				}
				//window.location = response;
		});
}

function save_content(){
		 var type = "";		
		 var raw_web_data = "";
		 var publisher = "";
		 var author = "";
		 var title = "";
		 var link = "";
		 var content = "";
		 var listing_id = "";
		 var raw_data = new Array();
		 //validate = true;
		 
		 listing_id = $('#listing_dropdown').val();
			
		 $($("#droppable" ).find('.content_to_drop')).each(function() {			
			type = $(this).attr('rel');
			i = $(this).attr('title');			
		   
			if(type=='web'){
				publisher = $("#"+type+"-publisher-"+i).html();
			}else{
				publisher = $("#"+type+"-publisher-"+i).attr('rel');
			}
			author = $("#"+type+"-author-"+i).val();
			title = $("#"+type+"-title-"+i).html();
			link = $(".link-"+type+"-"+i).html();
			content = $(".content-"+type+"-"+i).html();
			raw_web_data =  $(".raw-data-"+type+"-"+i).html();	

			data = {
					id: i,
					type: type,
					publisher : publisher,
					author: author,
					title: title,
					url: link,
					content: content,
					listing_id : listing_id,
					raw_web_data: raw_web_data
					};
			 raw_data.push(data);
		});
		
		validate = true;
		/*$($("#droppable" ).find('.required')).each(function() {
			//validate = true;
			 if($(this).val() == ''){
				validate = false;
				$(this).css('border','1px red solid');
			 }else{					
				$(this).css('border','0px red solid');
			 }
		});*/
		
		$(".required1").each(function() {
			//validate = true;
			if($(this).val() == ''){
				validate = false;
				$(this).css('border','1px red solid');
			}else{
				
				$(this).css('border','0px red solid');
			}
		});
		if(validate) {
			if(raw_data.length >0 || new_entry_data.length>0) {
			}else{
				validate = false;
				$('#error').show('slow');
				$("#error").html("Please drag and drop at least one entry.");
				$('#error').fadeOut(9000);
			}
		}

		if( !$('#listing_dropdown').length && validate){
			$('a#coverage-listing-window').trigger('click');
			validate = false;
		}

		//if(validate) {
		if(listing_id) {
			$.ajax({
				url: base_url+"coverage/save/",
				type: "post",
				dataType: 'json',
				data: { 
					raw_data: raw_data,
					new_entry_data: new_entry_data,
					listing_id : listing_id
				},
				success: function(response, textStatus){
						if(response.result == 'S'){
							$('#success_add').hide();
							//$('#success').show('slow');
							window.location.href = base_url+"coverage/search/"+listing_id;
							$('#success').show();
							$("#success").html("Coverage successfully saved!"); 
							$('#success').fadeOut(9000);
							$('#listing_div').html('Untiled Coverage  <a href="#coverage-listing-box" id="coverage-listing-window"><i class="icon-edit"></i></a>');
							//clear_all();
						}else{
							$('#error').show('slow');
							//$("#error").html("You must be logged in to perform that action.");
							$("#error").html(response.message);
							$('#error').fadeOut(9000);
						}
					},
				error:  function(response, textStatus) {
						$('#success_add').hide();
						$('#error').show('slow');
						$("#error").html("Error while saving the records!");
						$('#error').fadeOut(9000);
					}
					//window.location = response;
			});
		  }
		//}
}

/*$(window).scroll(function () {
	 var divHeight = $(document).scrollTop();
	
			var n = parseInt($('#search_container').height());
			var s = parseInt($('#coverage_div').height());
			var diff = parseInt(divHeight) + s;
			//alert(Math.abs(diff) +'<='+ n)
			if( Math.abs(diff) <= n ){
				//after window scroll fire it will add define pixel added to that element.
				var  set = parseInt(divHeight)+"px";
				//this is the jQuery animate function to fixed the div position after scrolling.
				$('.floating_div').animate({top:set},{duration:1000,queue:false});
			}else {
			   var set = '0px';
			   $('.floating_div').animate({top:set},{duration:1000,queue:false});
			}
   });*/

$(document).ready(function() {

	$('#publisher_date').jdPicker();
		
	  
		$('#new_coverage').submit(function(event){						// New Coverage Pop Up 
			validate = true;
			$(".req").each(function() {
					validate = true;
					if($(this).val() == ''){
						validate = false;
						$(this).css('border','1px red solid');
					}else{
						
						$(this).css('border','0px red solid');
					}
				});
				if(validate){
					data = $('#new_coverage').serialize();
				
					new_entry_data.push(data);
					var str1 = $('#publisher_date').val();
					var	s = str1.split("-");
					var n0 = String(s[0]).substring(2);
					if(s[2].substring(0, 1) == '0') { 
					    var n2 = s[2].substring(1);
					} else { 
						var n2 = s[2];
					}

					if(s[1].substring(0, 1) == '0') { 
						var n1 = s[1].substring(1);
					} else {
						var n1 = s[1];
					}
					var date_publisher = n1 + "/" + n2 + "/" +n0;
					
					if(listing) {
						var content = '<tr> <td>'+$('#publication').val()+'</td><td>'+$('#author').val()+'</td><td>'+$('#title').val()+'</td><td colspan="2">'+date_publisher+'</td></tr>';
						//$( "#droppable tr:last" ).before(content);
						$('#droppable tbody:first').append(content);
					} else {
						var content = '<tr> <td>'+$('#publication').val()+'</td><td>'+$('#author').val()+'</td><td>'+$('#title').val()+'</td><td>'+date_publisher+'</td></tr>';
						//$( "#droppable tr:last" ).before(content);
						$('#droppable tbody:first').append(content);
						$('#droppable').tablesorter({
							cssInfoBlock   : "no-sort",
							debug: true
						});	
					}

					$('#coverage-box').hide('slow');
					$(".req").each(function() {
						$(this).val('');
					});

					$('#success_add').show('slow');
					$("#success_add").html("Coverage successfully added!"); 
					$('#success_add').fadeOut(9000);
						
				}
			event.preventDefault();
		});

		
		$('#clear_btn').click(function(){
			clear_all();
		});	


		$('#popup_clear_btn').click(function(){						// Pop Up Clear Button
			$('#new_coverage').each(function(){
				this.reset();
			});	
		});	

		$('#new_coverage_listing').submit(function(event){			// New Coverage Listing Pop Up
			var listing_name = $("#listing_name").val();
			validate = true;
				$(".req1").each(function() {
						validate = true;
						if($(this).val() == ''){
							validate = false;
							$(this).css('border','1px red solid');
						}else{
							
							$(this).css('border','0px red solid');
						}
				});
				if(validate) {
					$.ajax({
						url: base_url+"coverage/add_new_coverage_listing/",
						type: "post",
						dataType: 'json',
						data : { name :listing_name },
						success: function(response){
							//$('#listing_div').html(response);
							if(response.result == 'S'){
								$('#listing_div').html(response.name);
								$('#listing_div').after('<input type="hidden" name="listing_dropdown" id="listing_dropdown" value="'+response.id+'">');
								
							}else{
								$('#error').show('slow');
								$("#error").html("You must be logged in to perform that action.");
								//$("#error").html(response.message);
								$('#error').fadeOut(9000);
							}
						}
					});
					
					$('#coverage-listing-box').hide('slow');
					$(".req1").each(function() {
						$(this).val('');
					});			
				}
				$("#listing_dropdown").val(listing_name);	
				event.preventDefault();
		});


		$('#submit_btn').click(function(event){
			var query = $('#query').val();
			//alert(query);
			document.cookie= 'query_string_cookie' + "=" + query;

			search(query);
			event.preventDefault();
		});


		$('#save_btn').click(function(){
			save_content();
		});
		
		$('#view_coverage_listing').click(function(){
			listing_id = $('#listing_dropdown').val();
			window.location.href = base_url+"coverage/view_listing/"+listing_id;

		});


		// --------------- Coverage POP UP ------------------------//
		$('a#coverage-window').click(function() {
					//Getting the variable's value from a link 
			var coverageBox = $(this).attr('href');

			//Fade in the Popup
			$(coverageBox).fadeIn(300);
			
			//Set the center alignment padding + border see css style
			//var popMargTop = ($(coverageBox).height() + 14) / 2; 
			var popMargLeft = ($(coverageBox).width() + 24) / 2; 
			
			$(coverageBox).css({ 
				//'margin-top' : popMargTop,
				'margin-left' : -popMargLeft
			});
			
			// Add the mask to body
			$('body').append('<div id="mask"></div>');
			$('#mask').fadeIn(300);
			
			return false;
		});
		
		// When clicking on the button close or the mask layer the popup closed
		$('a.close, #mask').live('click', function() { 
		  $('#mask , #coverage-box').fadeOut(300 , function() {
			$('#mask').remove();  
		}); 
		return false;
		});
		// --------------- Coverage POP UP Ends------------------------//

		// --------------- Coverage Listing POP UP  Starts  -----------//

		$('a#coverage-listing-window').click(function() {
			
					//Getting the variable's value from a link 
			var coverageListBox = $(this).attr('href');

			//Fade in the Popup
			$(coverageListBox).fadeIn(300);
			
			//Set the center alignment padding + border see css style
			//var popMargTop = ($(coverageBox).height() + 14) / 2; 
			var popMargLeft = ($(coverageListBox).width() + 24) / 2; 
			
			$(coverageListBox).css({ 
				//'margin-top' : popMargTop,
				'margin-left' : -popMargLeft
			});
			
			// Add the mask to body
			$('body').append('<div id="mask1"></div>');
			$('#mask1').fadeIn(300);
			
			return false;
		});
		// When clicking on the button close or the mask layer the popup closed
		$('a.close, #mask1').live('click', function() { 
		  $('#mask1 , #coverage-listing-box').fadeOut(300 , function() {
			$('#mask1').remove();  
		}); 
		return false;
		});


		// --------------------------  For autocomplete coverage listing    ---------------------//
		$('.delete-coverage').click(function(event){

			var r=confirm("Are you sure you want to delete this record!");
			if (r==true){
				var row_id = $(this).attr('data-id');

				$('#coverage_row_'+row_id).hide('slow');
				$.ajax({
					url: base_url+"coverage/delete_coverage_data/",
					type: "post",
					dataType: 'html',
					data: { 
						coverage_id : row_id
					},
					success: function(response, textStatus){
							//$('#success').show('slow');
							//$("#success").html("Coverage record deleted successfully!"); 
							//$('#success').fadeOut(9000);
						},
					error: function() {
							$('#error').show('slow');
							$("#error").html("Error while deleting the records!");
							$('#error').fadeOut(9000);
						}
				});
			}
		});


		$('.edit-coverage').click(function() {
			var row_id = $(this).attr('data-id');
			$('#publisher_date_'+ row_id).jdPicker();

					//Getting the variable's value from a link 
			var editCoverageBox = $(this).attr('href');

			$(editCoverageBox).fadeIn(300);
			var popMargLeft = ($(editCoverageBox).width() + 24) / 2; 
			
			$(editCoverageBox).css({ 
				//'margin-top' : popMargTop,
				'margin-left' : -popMargLeft
			});
			
			// Add the mask to body
			$('body').append('<div id="mask"></div>');
			$('#mask').fadeIn(300);
			return false;
		});

		// When clicking on the button close or the mask layer the popup closed
		$('a.close, #mask').live('click', function() { 
			var row_id = $(this).attr('data-id');
			$('#mask, #coverage-box-edit-'+row_id).fadeOut(300 , function() {
			$('#mask').hide();  
		}); 
		return false;
		});			 

		$('.edit_coverage_btn').click(function(event){				// Edit Coverage Pop Up 
			var new_entry_data1 = new Array();
			var i = $(this).attr('rel');

			var coverage_id = $('#coverage_id_'+ i).val();
			var publisher = $("#publication_"+ i).val();
			var author = $("#author_"+ i).val();
			var title =  $("#title1_"+ i).val();	
			var link =  $("#link1_"+ i).val();	
			var publisher_date =  $("#publisher_date_"+ i).val();	
			data = {
				publisher : publisher,
				author: author,
				title: title,
				link: link,
				publisher_date: publisher_date
				};
			new_entry_data1.push(data);
			validate = true;
			$(".req2"+ i).each(function() {
				
				if($(this).val() == ''){
					validate = false;
					$(this).css('border','1px red solid');
				}else{
					$(this).css('border','0px red solid');
				}
			});

			if(validate) {
				$.ajax({
					url: base_url+"coverage/edit_coverage_data/",
					type: "post",
					dataType: 'html',
					data: { 
						new_entry_data1: new_entry_data1,
						coverage_id : coverage_id
					},
					success: function(response, textStatus){
							//alert(response);
							$('#success_add').show('slow');
							$("#success_add").html("Coverage updated successfully!"); 
							$('#success_add').fadeOut(9000);
							//window.location.href = "<?php echo base_url(); ?>coverage/load_listing/";
						},
					error: function() {
							$('#error').show('slow');
							$("#error").html("Error while saving the records!");
							$('#error').fadeOut(9000);
						}
					});

					$('#lbl_publisher_'+i).html($('#publication_'+i).val());
					$('#lbl_author_'+i).html($('#author_'+i).val());
					$('#title_'+i).html($('#title1_'+i).val());
					$('#lbl_publisher_date_'+i).html($('#publisher_date_'+i).val());
					$('#coverage-box-edit-'+i).hide('slow');
			}
			event.preventDefault();
		});

		$('.popup_clear_btn1').click(function(){						// Pop Up Clear Button
			var i = $(this).attr('rel');
			$('#publication_'+i).val('');
			$('#author_'+i).val('');
			$('#title1_'+i).val('');
			$('#link1_'+i).val('');
			$('#publisher_date_'+i).val('');
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

function add_list(){
		$('#list_container').show();
		
		$( ".list_drag" ).draggable({helper: 'clone'});	
		$( "#list_droppable" ).droppable({
			accept: ".list_drag",
			drop: function( event, ui ) {		
				var list_draggableId = ui.draggable.attr("id");
				$('#'+list_draggableId).addClass('exist');
				$('#'+list_draggableId).draggable( "option", "disabled", true );
				var list_droppableId = $(this).attr("id");
				event.preventDefault();
				content = $(ui.draggable).html();
				$( "#list_droppable" ).append(content);	
			}
		});
		$('#search_container').hide();
}

function save_new_listing(){
	var listing_name = $("#listing_name").val();
	$.ajax({
			url: base_url+"coverage/save_listing/",
			type: "post",
			dataType: 'html',
			data : { name :listing_name },
			success: function(response){
				alert(response);
			}
    });
}

function save_list_content(){
 	var header_id = "";
	$('#list_droppable').find((".list_drag_div")).each(function() {
		header_id += $(this).attr('rel') + "|";
	});
	listing_id = $('#format_listing').val();

	$.ajax({
			url: base_url+"coverage/save_listing_header/",
			type: "post",
			dataType: 'html',
			data: { header_id: header_id,
					listing_id:	listing_id
				  },
			success: function(response){
				alert(response);
				//window.location = response;
			}
	});
}