<script type="text/javascript">
	$(document).ready(function(){

/*	POPULATE TABLE	*/
		populateBorrowedTable();

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
			populateBorrowedTable(searchBarValue);
		});
		
/*	BORROW MODAL 	*/
		/*	POPULATE BORROW MODAL 	*/
		$('#borrowedModal').on('show.bs.modal', function(response) {
			var source = $(response.relatedTarget);
		    currentRow = source.closest('tr');
		    responseID = currentRow.attr('id');
		    var request = $.post("<?= base_url('api/controller_account/getLoggedInAccountIdNumber') ?>",{},'json');

				request.done(function(response) {
					var result = jQuery.parseJSON(response);
					var borrowedIdNumber = result.data[0].id_number;
					$("[name=borrowedIdNumber]").val(borrowedIdNumber);
				});
			$("#"+responseID).each(function() {
				var borrowedId = $(this).find(".borrowedId").text();
				var borrowedQuantity = $(this).find(".borrowedQuantity").text();
				var borrowedItemName = $(this).find(".borrowedItemName").text();
				var borrowedBrandModel = $(this).find(".borrowedBrandModel").text();

				$("[name=id]").val(borrowedId);
				$("[name=borrowedItemQuantity]").val(1);
				$("[name=borrowedItemName]").val(borrowedItemName);
				$("[name=borrowedItemBrand]").val(borrowedBrandModel);
			});
		});

		/*	CHANGE FORM ACTION 	*/

		$('#borrowedModal').on('show.bs.modal', function(){
			$('#borrowedListModalForm').attr('action',"<?=base_url('api/controller_inventory/borrowedItemChangeStatus');?>");
			$('#borrowedListModalForm').ajaxForm({
				success : function(event) {
					var result = jQuery.parseJSON(event);

					$('#borrowedModal').modal('hide');
					populateBorrowedTable();
				}
			});
			$("[name=borrowedItemDate]").datepicker({
				  autoclose : true,
				 todayHighlight : true,
				 toggleActive : true,
				 format : "yyyy/mm/dd"
			}).datepicker("setDate", new Date());
		});
	});

	/*	POPULATE TABLE 	*/
	function populateBorrowedTable(searchBarValue = false) {
		var accountIdNumber = false;
		var loggedInAccountIdNumber = $.post("<?= base_url('api/controller_account/getLoggedInAccountIdNumber')?>", {}, 'json');

		loggedInAccountIdNumber.done(function(response){
			var result = jQuery.parseJSON(response);
			accountIdNumber = result.data[0].id_number;

			if (searchBarValue) {
				var itemObject = {
					search_BarValue : searchBarValue,
					id_number : accountIdNumber
				};
				console.log(accountIdNumber);
			} else {
				var itemObject = {
					id_number : accountIdNumber
				};
			}

			var request = $.post("<?= base_url('api/controller_inventory/getUserBorrowedItems') ?>", itemObject , 'json');

			request.done(function(response) {
				$('#borrowedTable').empty();
				var result = jQuery.parseJSON(response);
				
				if (!result['error'].length) {
					for (var x = 0; x < result.data.length; x++ ) {
						var borrowedCloneTable = $(".borrowedCloneTable").find('.borrowedToBeClonedTable').clone();
						var resultData = result.data[x];

						borrowedCloneTable.attr('id', resultData.log_id);
						borrowedCloneTable.find('.borrowedId').text(resultData.log_id);
						borrowedCloneTable.find('.borrowedQuantity').text(resultData.borrow_qty);
						borrowedCloneTable.find('.borrowedItemName').text(resultData.item_name);
						borrowedCloneTable.find('.borrowedBrandModel').text(resultData.brand_model);
						borrowedCloneTable.removeClass('borrowedToBeClonedTable');

					 $("#borrowedTable").append(borrowedCloneTable);
					}
				}
			});
		});
	}
</script>