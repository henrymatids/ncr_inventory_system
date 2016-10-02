<script type="text/javascript">
	$(document).ready(function(){

/*	POPULATE TABLE	*/
		populateAccntTable();
	/*****
	*	EXPORT TABLE
	******/
		$('#exportTable').click(function(){
			$('.table').tableExport({
									type:'excel',
									escape:'false'
											});
		});
		
/*	SEARCH BAR 	*/
		$('[name=searchBar]').on('input', function(e) {
			var searchBarValue = $(this).val();
			populateAccntTable(searchBarValue);
		});
		
	});
	/*	POPULATE TABLE 	*/
	function populateAccntTable(itemName = false) {
		if (itemName) {
			var itemObject = {
				searchBarValue : itemName
			};
		} else {
			var itemObject = {};
		}
		var request = $.post("<?= base_url('api/controller_inventory/getAllApprovedItems') ?>", itemObject , 'json');

		request.done(function(response) {
			$('#accntTable').empty();
			var result = jQuery.parseJSON(response);
			if (!result['error'].length) {
				for (var x = 0; x < result.data.length; x++ ) {
					var accntCloneTable = $(".accntCloneTable").find('.accntToBeClonedTable').clone();
					var resultData = result.data[x];

					accntCloneTable.attr('id', resultData.id);
					accntCloneTable.find('.accntID').text(resultData.user_id_number);
					accntCloneTable.find('.accntFirstname').text(resultData.firstname);
					accntCloneTable.find('.accntMiddlename').text(resultData.middlename);
					accntCloneTable.find('.accntLastname').text(resultData.lastname);
					accntCloneTable.find('.accntItemName').text(resultData.item_name);
					accntCloneTable.find('.accntBrandModel').text(resultData.brand_model);
					accntCloneTable.find('.accntQuantity').text(resultData.borrow_qty);
					accntCloneTable.removeClass('accntToBeClonedTable');

				 $("#accntTable").append(accntCloneTable);
				}
			}
		});
	}
</script>