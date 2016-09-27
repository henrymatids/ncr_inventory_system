<script type="text/javascript">
	$(document).ready(function(){

		/*	POPULATE TABLE 	*/
			populateReturnedItemsTable();
			
			/*****
			*	EXPORT TABLE
			******/
			$('#exportTable').click(function(){
				$('.table').tableExport({
										type:'excel',
										escape:'false'
												});
			});

			/******
			*	SEARCH BAR
			******/
			$('[name=searchBar').on('input', function(e) {
				var searchBarValue = $(this).val();
				populateReturnedItemsTable(searchBarValue);
			});
	});

	function populateReturnedItemsTable(searchBarValue = false) {
		if (searchBarValue) {
			var returnedItemObject = {
				searchBarValue : searchBarValue
			};
		} else {
			var returnedItemObject = {};
		}

		var request = $.post("<?= base_url('api/controller_inventory/getAllReturnedItems') ?>", returnedItemObject, 'json');

		request.done(function(response){
			$('#returnedTable').empty();
			var result = jQuery.parseJSON(response);
			
			if(!result['error'].length){
				for(var x = 0; x < result.data.length; x++){
					var returnedCloneTable = $('.returnedCloneTable').find('.returnedToBeClonedTable').clone();
					var resultData = result.data[x];

					returnedCloneTable.attr('id', resultData.log_id);
					returnedCloneTable.find('.returnedBy').text(resultData.user_id_number);
					returnedCloneTable.find('.returnedQuantity').text(resultData.borrow_qty);
					returnedCloneTable.find('.returnedItemName').text(resultData.item_name);
					returnedCloneTable.find('.returnedBrandModel').text(resultData.brand_model);
					returnedCloneTable.find('.dateBorrowed').text(resultData.date_borrowed);
					returnedCloneTable.find('.returnedDate').text(resultData.date_returned);
					returnedCloneTable.removeClass('returnedToBeClonedTable');

				 $("#returnedTable").append(returnedCloneTable);
				}
			}
		});
	}
</script>