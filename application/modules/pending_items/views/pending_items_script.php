<script type="text/javascript">
	$(document).ready(function(){
		/******
		*	POPULATE TABLE
		******/
			populatePendingItemsTable();

			/******
			*	SEARCH BAR
			******/
			$('[name=searchBar').on('input', function(e) {
				var searchBarValue = $(this).val();
				populatePendingItemsTable(searchBarValue);
			});
	});

	function populatePendingItemsTable(searchBarValue = false) {
		if (searchBarValue) {
			var pendingItemObject = {
				searchBarValue : searchBarValue
			};
		} else {
			var pendingItemObject = {};
		}

		var request = $.post("<?= base_url('api/controller_inventory/getAllPendingItems') ?>", pendingItemObject, 'json');

		request.done(function(response){
			$('#pendingTable').empty();
			var result = jQuery.parseJSON(response);
			console.log("RAW: "+response);
			console.log("PARSED: "+result);

			if(!result['error'].length){
				for(var x = 0; x < result.data.length; x++){
					var pendingCloneTable = $('.pendingCloneTable').find('.pendingToBeClonedTable').clone();
					var resultData = result.data[x];

					pendingCloneTable.attr('id', resultData.id);
					pendingCloneTable.find('.pendingBorrowedBy').text(resultData.user_id_number);
					pendingCloneTable.find('.pendingQuantity').text(resultData.borrow_qty);
					pendingCloneTable.find('.pendingItemName').text(resultData.item_name);
					pendingCloneTable.find('.pendingBrandModel').text(resultData.brand_model);
					pendingCloneTable.find('.pendingDateBorrowed').text(resultData.date_borrowed);
					pendingCloneTable.removeClass('pendingToBeClonedTable');

				 $("#pendingTable").append(pendingCloneTable);
				}
			}
		});
	}
</script>