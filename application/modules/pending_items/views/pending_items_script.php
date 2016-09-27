<script type="text/javascript">
	$(document).ready(function(){
		requestLoggedInUser();
		/******
		*	POPULATE TABLE
		******/

			populatePendingItemsTable();
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
				populatePendingItemsTable(searchBarValue);
			});
	/*	APPROVE MODAL 	*/
		/*	GET ID 	*/
		 	$("#approveModal").on('show.bs.modal', function(response) {
			    var source = $(response.relatedTarget);
			    currentRow = source.closest('tr');
			    responseID = currentRow.attr('id');

			    $("#"+responseID).each(function() {
			    	$("[name=approveModalID]").attr("id",responseID);
			    });
			});

		/* APPROVE SELECTED ITEM */
		    $("#approveYes").on('click', function() {
				var id = {
						id : $("[name=approveModalID]").attr("id"),
						status : 2
					};
				var request = $.post("<?= base_url('api/controller_inventory/changeItemStatus') ?>", id, 'json');

		    	request.done(function(response) {
		    		var result = jQuery.parseJSON(response);
		    		console.log(response);
		    		if(result['error'].length){
		    			console.log(result['error']);
		    		} else {
		    			$('#approveModal').modal('hide');
		    			populatePendingItemsTable();
		    		}
		    	});
		    });
	/* 	DELETE MODAL 	*/
		/*	GET ID 	*/
		 	$("#deleteModal").on('show.bs.modal', function(response) {
			    var source = $(response.relatedTarget);
			    currentRow = source.closest('tr');
			    responseID = currentRow.attr('id');

			    $("#"+responseID).each(function() {
			    	$("[name=deleteModalID]").attr("id",responseID);
			    });
			});

		/* DELETE SELECTED ITEM */
		    $("#deleteYes").on('click', function() {
				var id = {
						id : $("[name=deleteModalID]").attr("id")
					};
				var request = $.post("<?= base_url('api/controller_inventory/deletePendingItem') ?>", id, 'json');

		    	request.done(function(response) {
		    		var result = jQuery.parseJSON(response);
		    		console.log(response);
		    		if(result['error'].length){
		    			console.log(result['error']);
		    		} else {
		    			$('#deleteModal').modal('hide');
		    			populatePendingItemsTable();
		    		}
		    	});
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

			if(!result['error'].length){
				for(var x = 0; x < result.data.length; x++){
					var pendingCloneTable = $('.pendingCloneTable').find('.pendingToBeClonedTable').clone();
					var resultData = result.data[x];

					pendingCloneTable.attr('id', resultData.log_id);
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

	function requestLoggedInUser() {
		var request = $.post("<?=base_url('api/controller_account/getLoggedInUser')?>", {}, 'json');

		request.done(function(response){
			var result = jQuery.parseJSON(response);
			console.log(result.data);
			if(result.data == "Student") {
				$("#approveBtn").hide();
			}
		});
	}
</script>