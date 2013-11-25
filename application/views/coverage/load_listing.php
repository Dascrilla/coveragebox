<script src="<?php echo base_url(); ?>js/search.js"></script>
<?php 
if(isset($listing) && !empty($listing)){  ?>
	<script type="text/javascript">
	var listing = true;
	</script>
<?php }?>
<input type="hidden" name="listing_dropdown" id="listing_dropdown" value="<?php echo $listing;?>">
<div class="datagrid-example" id="MyGrid">
	<table class="table table-bordered datagrid table-hover" id="droppable">
		<thead>
			<tr>
				<th width="18%">Publication </th>
				<th>Author </th>
				<th>Title </th>
				<!--<th width="20%">Url </th>-->
				<th>Date</th>
				<th width="18%">Action</th>
			</tr>
		</thead>
		<tbody class="ui-sortable">
		<?php 
		if(isset($listing) && !empty($listing)){
		foreach($listing as $list){?>
		<tr id="coverage_row_<?php echo $list->id;?>">
			<td><label id="lbl_publisher_<?php echo $list->id;?>"><?php echo $list->publisher;?></label></td>
			<td><label id="lbl_author_<?php echo $list->id;?>"><?php echo $list->author;?></label></td>
			<td><a id="title_<?php echo $list->id;?>" href="<?php echo $list->link;?>" target='blank'><?php echo $list->title;?></a></td>
			<!--<td width="20%"><a id="link_<?php echo $list->id;?>" href="<?php echo $list->link;?>" target='blank'><?php echo $list->link;?></a></td>-->
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
						<input type='hidden' name='coverage_id' id='coverage_id_<?php echo $list->id;?>' value='<?php echo $list->id;?>'>
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
								<!-- <input type="text" placeholder="" value='<?php echo $list->publisher_date;?>' name='publisher_date_old' id='publisher_date_old_<?php echo $list->id;?>' class='req2<?php echo $list->id;?>'> -->
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
	</table>
	<!-- <?php if(isset($listing) && !empty($listing)){ ?>
	<p><?php echo $pagination; ?></p>
	<?php }?> -->

</div>
	<a class="btn btn-success" href="#coverage-box" id="coverage-window"><i class="icon-edit"></i>New Entry</a>
	<a class="btn btn-info" href="javascript:void(0);" id='save_btn'><i class="icon-save"></i> Save</a>	  
	<a class="btn" href="javascript:void(0);" id='clear_btn'><i class="icon-trash"></i>Clear</a>
	<a class="btn btn-primary" id="view_coverage_listing">Full screen table </a>

<script>
$('.delete-coverage').click(function(event){

	var r=confirm("Are you sure you want to delete this record!");
	if (r==true){
		var row_id = $(this).attr('data-id');

		$('#coverage_row_'+row_id).hide('slow');
		$.ajax({
			url: "<?php echo base_url(); ?>coverage/delete_coverage_data/",
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
	 

$('.edit_coverage_btn').click(function(event){								// Edit Coverage Pop Up 
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
			url: "<?php echo base_url(); ?>coverage/edit_coverage_data/",
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
			$('#link_'+i).html($('#link1_'+i).val());
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

$('#view_coverage_listing').click(function(){
		listing_id = $('#listing_dropdown').val();
		window.location.href = "<?php echo base_url(); ?>coverage/view_listing/"+listing_id;
});

</script>



