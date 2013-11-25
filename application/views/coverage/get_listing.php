<?php 
	$listing_name = "";
	if($listing_list){
		foreach($listing_list as $list) { 
			$listing_name .= "{label:'" . $list->name . "',id:'" . $list->id . "'},";
		}
		$listing_label = substr($listing_name,0,-1);
	}
?>

<input type='text' id='listing' name='listing' placeholder="Search saved listing">
<script>
$(function() {
function log( message ) {
	$( "<div>" ).text( message ).prependTo( "#log" );
	$( "#log" ).scrollTop( 0 );
}

var data = [
			  <?php echo $listing_label; ?>
    	   ];

$( "#listing" ).autocomplete({
	//source: "<?php //echo $json_data;?>",
	source : data,
	minLength: 2,
		select: function( event, ui ) {
		$.ajax({
				url: "<?php echo base_url(); ?>coverage/load_listing/"+ui.item.id,
				data: {requestType:'ajax'},
				dataType: 'html',
				type: "post",
				success: function(response, textStatus){
						$('#listing_div').html(ui.item.label);
						$('#listing_div').after('<input type="hidden" name="listing_dropdown" id="listing_dropdown" value="'+ui.item.id+'">');
						$('#coverage_div').html(response);
					},
				error:  function() { }
			});

			log( ui.item ?
			"Selected: " + ui.item.value + " aka " + ui.item.id :
			"Nothing selected, input was " + this.value );
		}
	});
});
</script>
