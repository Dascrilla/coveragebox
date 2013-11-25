<div class="container">

	<div class="alert alert-error" id="error" style="display:none;"></div>  
	<div class="alert alert-success" id="success" style="display:none;"></div>
        <div class="page-header">
          <h1>Welcome, <small> <a href="#"> <?=$email?> </a></small></h1>
        </div>

		<div class="row-fluid">
			<div class="span3 offset1 well">
				<h4 align="center">Saved Searches</h4>
				<hr>
				<ul class="">
					 
				 </ul>
			</div>

			<div class="span5">
			<?php if($listing){
				foreach($listing as $var1){?>
					<div class="well" id="listing_row_<?php echo $var1->id;?>">
						<div style="float:left;width:100%;">
							<h3 style=" float: left;margin: 0;padding: 0;width: 88%;">
							<?php //echo anchor('coverage/view_listing/'.$var1->id, $var1->name); ?>
							<a href="<?php echo base_url(); ?>coverage/view_listing/<?php echo $var1->id; ?>"><?php echo $var1->name;?></a> </h3>
							<h5 >
								<a href="javascript:void(0);" class='delete-listing trash' data-id='<?php echo $var1->id;?>' title="Delete"></a>
							</h5>							
						 </div>
						 <p class="lead"> <?php echo $var1->created;?> </p>
			
					</div>
			<?php } 
			   }  ?>
			</div>

			<div class="span2">
				<h3>Account Info</h3>
				<ul>
				   <li style="list-style:none;"><img class="gravatar" src="http://www.gravatar.com/avatar/ca71f8436cbac2cbb388bf62c49896f2"></li>
				   <li><strong>Username: </strong><?=$username?></li>
				   <li><strong>Account Type: </strong><?=$role?></li>
				   <li><strong>Email: </strong><?=$email?></li>
				   <li style="list-style:none;"><?php echo anchor('/user/edit_profile/', 'Edit Profile'); ?></li>
				   <li style="list-style:none;"><?php echo anchor('/auth/change_password/', 'Change Password'); ?></li>
				</ul>
			</div>
		</div>
</div>

<script>
$('.delete-listing').click(function(event){

	var r=confirm("Are you sure you want to delete this record!");
	if (r==true){
		var row_id = $(this).attr('data-id');

		$('#listing_row_'+row_id).hide('slow');
		$.ajax({
			url: "<?php echo base_url(); ?>coverage/delete_listing/",
			type: "post",
			dataType: 'html',
			data: { 
				listing_id : row_id
			},
			success: function(response, textStatus){
					$('#success').show('slow');
					$("#success").html("Listing deleted successfully!"); 
					$('#success').fadeOut(9000);
				},
			error: function() {
					$('#error').show('slow');
					$("#error").html("Error while deleting the records!");
					$('#error').fadeOut(9000);
				}
		});
	}
});
</script>
