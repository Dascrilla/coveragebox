<style>
.ui-tabs-active{
	-moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background-color: #FFFFFF;
    border-color: #DDDDDD #DDDDDD transparent;
    border-image: none;
    border-style: solid;
    border-width: 1px;
    color: #555555;
    cursor: default;
}
.ui-widget-content a {
	float:none;
	color:#0088CC;
	font-size:12px;
}
.ui-widget-content {
    text-align: left;
    font-size:12px;
}
.content_to_drop{
	text-align:left;
}
.exist{
	background-color: #E6E6E6;
	border-radius:10px;
	padding:5px;
}
.floating_div {
	position:relative;
}
.well {
	padding-bottom:2px;
}
  
</style>
<!-- <?php 
	$header_name = "";
	foreach($var2 as $var) { 
		$header_name .= $var->name. ":'".$var->label ."',";
	}
	$header_label = substr($header_name,0,-1);
?>
 -->
<script src="http://www.google.com/jsapi?sig=AIzaSyDzboD1N4mmhuiehuXPryFuZue977B830Q" type="text/javascript"></script>
<script type="text/javascript">
google.load('search', '1');
var base_url = '<?php echo base_url(); ?>';
var listing = false;
</script>
<?php 
if(isset($listing) && !empty($listing)){  ?>
	<script type="text/javascript">
	var listing = true;
	</script>
<?php }?>
<script src="<?php echo base_url(); ?>js/search.js"></script>

<?php if($this->session->flashdata('message')){?>
	<div class="page-header">
			  <h1>Welcome! <small>Create a new coverage list to get started.</small></h1>
	</div>
<?php }?>
<div class="row-fluid">
	<div class="span8 list" style="min-height:645px;" >
		<div class="alert alert-error" id="error" style="display:none;"></div>  
		<div class="alert alert-success" id="success" style="display:none;"></div>
		<div class="alert alert-success" id="success_add" style="display:none;"></div>

		<div id='listing_autocomplete' style='float:right;'></div>
		<div class="block">
			<?php if(isset($listing) && !empty($listing)){ ?>
				<h3 id="listing_div"><?php echo $listing_name[0]->name; ?></h3>
				<input id="listing_dropdown" type="hidden" value="<?php echo $listing_name[0]->id ?>" name="listing_dropdown">
			<?php } else {?>
				<h3 id="listing_div">Untiled Coverage  <a href="#coverage-listing-box" id="coverage-listing-window"><i class="icon-edit"></i></a></h3>
			<?php } ?>
		</div>
		<div id="coverage_div" class="floating_div">
			<div class="datagrid-example" id="MyGrid" >
				<table class="table table-bordered datagrid table-hover tablesorter tablesorter-blue" id="droppable" style="overflow:auto;">
					<?php if(isset($listing) && !empty($listing)) { ?>
						<thead>
							<tr>
								<th width="18%">Publication </th>
								<th>Author </th>
								<th>Title </th>
								<th>Date</th>
								<th width="18%">Action</th>
							</tr>
						</thead>
						<tbody >
						<?php 
						if(isset($listing) && !empty($listing)){
						foreach($listing as $list){?>
							<tr id="coverage_row_<?php echo $list->id;?>">
								<td><label id="lbl_publisher_<?php echo $list->id;?>"><?php echo $list->publisher;?></label></td>
								<td><label id="lbl_author_<?php echo $list->id;?>"><?php echo $list->author;?></label></td>
								<td><a id="title_<?php echo $list->id;?>" href="<?php echo $list->link;?>" target='blank'><?php echo $list->title;?></a></td>
								<?php	
									list($year,$month,$day) = explode('-', $list->publisher_date);
									if($day[0] == '0'){
										$day1 = substr($day, 1); 
									} else {
										$day1 = $day;
									}
									if($month[0] == '0'){
										$month1 = substr($month, 1); 
									} else {
										$month1 = $month;
									}
									$year1 = substr($year, 2); 
									$publisher_date = $month1 . "/" . $day1 . "/" .$year1;
								?>
								<td><label id="lbl_publisher_date_<?php echo $list->id;?>"><?php echo $publisher_date;?></label></td>
								<td align="right">
									<a href="#coverage-box-edit-<?php echo $list->id;?>" class="edit-coverage" data-id='<?php echo $list->id;?>' title="Edit"><i class="icon-pencil"></i>Edit</a>&nbsp;/&nbsp;
									<a href="javascript:void(0);" class='delete-coverage' data-id='<?php echo $list->id;?>' title="Delete"><i class="icon-trash"></i>Delete</a>
									
									<div id="coverage-box-edit-<?php echo $list->id;?>" class="modal" style="width:410px;display:none;">
										<a href="#" class="close" data-id='<?php echo $list->id;?>'><img src="<?php echo base_url(); ?>img/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
										<form class="new-form" id='edit_coverage_form' method='post'>
											<input type='text' name='coverage_id' id='coverage_id_<?php echo $list->id;?>' value='<?php echo $list->id;?>'>
											<fieldset>
												<legend align="center"> New Coverage Item</legend>
												<label>Publication</label>
													<input type="text" placeholder="" value='<?php echo $list->publisher;?>' name='publication' id='publication_<?php echo $list->id;?>' class='req2<?php echo $list->id;?>'>
												<label>Author </label>
													<input type="text" placeholder="" value='<?php echo $list->author;?>' name='author' id='author_<?php echo $list->id;?>' class='req2<?php echo $list->id;?>'>
												<label>Title</label>
													<input type="text" placeholder="" value='<?php echo $list->title;?>' name='title' id='title1_<?php echo $list->id;?>' class='req2<?php echo $list->id;?>'>
												<label>Hyperlink</label>
													<input type="text" placeholder="" value='<?php echo $list->link;?>' name='link' id='link1_<?php echo $list->id;?>' class='req2<?php echo $list->id;?>'>
												<label>Date</label>
													<input type="text" placeholder="" value='<?php echo $list->publisher_date;?>' name='publisher_date' id='publisher_date_<?php echo $list->id;?>' class='req2<?php echo $list->id;?>'>
												</br>
												</br>
												</br>
												<button type="button" class="btn btn-success edit_coverage_btn" rel="<?php echo $list->id;?>">Submit</button>
												<button type="button" class="btn popup_clear_btn1" rel="<?php echo $list->id;?>">Clear</button>
											</fieldset>
										</form>
									</div>
								</td>
							</tr>
						<?php }
							}?>

							<tr class="drag_box"><td colspan="5"><h3>Drag and Drop your Coverage</h3></td></tr>


						</tbody>
					<?php 
					} else { ?>
					<thead>
					<tr>
						<th>Publication </th>
						<th>Author </th>
						<th>Title </th>
						<th>Date</th>
					</tr>
					</thead>
					<tbody>
					</tbody>
					<tbody class="no-sort">
					<tr><td colspan='4'><div id='debugger'></div><h3>Drag and Drop your Coverage</h3></td></tr>
					</tbody>
					<?php } ?>
				</table>
				<!-- <?php if(isset($listing) && !empty($listing)){ ?>
				<p><?php echo $pagination; ?></p>
				<?php }?> -->
			</div>

			<a class="btn btn-success" href="#coverage-box" id="coverage-window"><i class="icon-edit"></i>New Entry</a>
			<a class="btn btn-info" href="javascript:void(0);" id='save_btn'><i class="icon-save"></i> Save</a>	  
			<a class="btn" href="javascript:void(0);" id='clear_btn'><i class="icon-trash"></i>Clear</a>
			<?php if(isset($listing) && !empty($listing)){ ?>
				<a class="btn pull-right" id="view_coverage_listing"><i class="icon-resize-full"></i></a>
			<?php }?>
		</div>
	</div>
	<!-- ################## Search  Container Start #################### -->
	<div class="span4 well" style="min-height:80px" align="center" id="search_container">
		<span> 
			<form class="navbar-search pull-left" style="width:270px;">
			<input type="text" value='<?php echo (isset($_POST['query']))?$_POST['query']:'';?>' id="query" name="query" class="search-query" placeholder="Search" style="width:62%; padding-right:20px;"> 
			<!-- <a class="btn btn-success" href="javascript:void(0);" id='submit_btn'>GO</a>	-->
			<button class="btn btn-success" id='submit_btn'>GO</button>
			</form>
		</span>
		<br>
		<br>
		<br>
		<div id="tabs">
 			<ul class="nav nav-tabs">
				<li><a href="#web-content" onClick="tabclick(this);">Web</a></li>
				<li><a href="#news-content" onClick="tabclick(this);">News</a></li>
				<!--<li class="dropdown" id="mytab">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Timeframe<b class="caret"></b></a>
					<ul class="dropdown-menu" style="min-width:124px;">
					  <li><a href="#">Anytime</a></li>
					  <li><a href="#">Past hour</a></li>
					   <li><a href="#">Past 24 hours</a></li>
					  <li><a href="#">Past week</a></li>
					   <li><a href="#">Past month</a></li>
					  <li><a href="#">Past year</a></li>

					  <li class="divider"></li>
					  <li><a href="#">Custom Range</a></li>

					</ul>
				</li>-->
			</ul>

			<input type="hidden" value="0" name="active_page_number"  id="active_page_number">
			<div style="min-height:20px;">				
				<div id="web-content">
					<br>
					<p align="center"><i>Custom Search Engine</i></p>
				</div>
				<div id="news-content">
					<p></p>
				</div>
				<div id="anytime-content">
					<p></p>
				</div>
				<div id="web-pagination" class="pagination pull-right"></div>
				<div id="news-pagination" class="pagination pull-right" style="display:none;"></div>
				<div id="anytime-pagination" class="pagination pull-right" style="display:none;"></div>
			</div>
		 
	</div>			
	<!-- ##################  Search  Container Ends  #################### -->

</div>	


<!-- ##################    Coverage Pop Up Box Div    ##################  -->
<div id="coverage-box" class="modal" style="width:410px;display:none;">
	<a href="#" class="close"><img src="<?php echo base_url(); ?>img/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
	<form class="new-form" id='new_coverage' method='post'>
	<!-- <input type='text' name='coverage_id' id='coverage_id' value=''> -->	
	<fieldset>
			<legend align="center"> New Coverage Item</legend>
			<label>Publication</label>
				<input type="text" placeholder="" name='publication' id='publication' class='req'>
			<label>Author </label>
				<input type="text" placeholder="" name='author' id='author' class='req'>
			<label>Title</label>
				<input type="text" placeholder="" name='title' id='title' class='req'>
			<label>Hyperlink</label>
				<input type="text" placeholder="" name='link' id='link' class='req'>
			<label>Date</label>
				<input type="text" placeholder="" name='publisher_date' id='publisher_date' class='req'>
			</br>
			</br>
			</br>
			<button type="submit" class="btn btn-success">Submit</button>
			<button type="submit" class="btn" id="popup_clear_btn">Clear</button>
		</fieldset>
	</form>
</div>

<div id="coverage-listing-box" class="modal" style="width:400px;display:none;top:94px;">
	<a href="#" class="close"><img src="<?php echo base_url(); ?>img/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
	<form class="new-form" id='new_coverage_listing' method='post'>
		<fieldset>
			<legend align="center"> Edit Coverage Listing</legend>
			<label>Listing Name</label>
			<input type="text" placeholder="Untitled List" name='listing_name' id='listing_name' class='req1'>
			<button type="submit" class="btn btn-success">Submit</button>
		</fieldset>
	</form>
</div>
<?php 
if(isset($_POST['query'])){ 
?>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#submit_btn').trigger('click');
	
	});
	</script>
<?php } ?>
<script type="text/javascript">

	var cookiename = 'query_string_cookie';
	var d = new Date();
		d.setDate(d.getDate() - 1);
		var expires = ";expires="+d;
		var name=cookiename;
		var value="";
		document.cookie = name + "=" + value + expires + ";";  

	var query_val = '';
	var i,x,y,ARRcookies=document.cookie.split(";");
		for (i=0;i<ARRcookies.length;i++)
		{
		  x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
		  y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
		  x=x.replace(/^\s+|\s+$/g,"");
		  if (x == 'query_string_cookie')
			{
			 query_val = unescape(y);
			}
		}
		if(query_val != ''){
			search(query_val);
		}

</script>
