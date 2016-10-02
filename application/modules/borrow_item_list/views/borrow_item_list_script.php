<script type="text/javascript">
	$(document).ready(function(){

/*	POPULATE TABLE	*/
		populateBorrowTable();
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
			populateBorrowTable(searchBarValue);
		});
		
/*	BORROW MODAL 	*/
		/*	POPULATE BORROW MODAL 	*/
		$('#borrowModal').on('show.bs.modal', function(response) {
			var source = $(response.relatedTarget);
		    currentRow = source.closest('tr');
		    responseID = currentRow.attr('id');
		    var request = $.post("<?= base_url('api/controller_account/getLoggedInAccountIdNumber') ?>",{},'json');

				request.done(function(response) {
					var result = jQuery.parseJSON(response);
					var borrowIdNumber = result.data[0].id_number;
					$("[name=borrowIdNumber]").val(borrowIdNumber);
					console.log(result);
				});
			$("#"+responseID).each(function() {
				var borrowId = $(this).find(".borrowId").text();
				var borrowQuantity = $(this).find(".borrowQuantity").text();
				var borrowItemName = $(this).find(".borrowItemName").text();
				var borrowBrandModel = $(this).find(".borrowBrandModel").text();

				$("[name=borrowID]").val(borrowId);
				$("[name=borrowItemQuantity]").val(1);
				$("[name=borrowItemName]").val(borrowItemName);
				$("[name=borrowItemBrand]").val(borrowBrandModel);
			});
		});

		$('#borrowModal').on('show.bs.modal', function(){
			$('#borrowListModalForm').attr('action',"<?=base_url('api/controller_inventory/borrowedItemForApproval');?>");
			$('#borrowListModalForm').ajaxForm({
				success : function(event) {
					$('#borrowModal').modal('hide');
				}
			});
			$("[name=borrowItemDate]").datepicker({
				  autoclose : true,
				 todayHighlight : true,
				 toggleActive : true,
				 format : "yyyy/mm/dd"
			}).datepicker("setDate", new Date());
		});
	});

	/*	POPULATE TABLE 	*/
	function populateBorrowTable(itemName = false) {
		if (itemName) {
			var itemObject = {
				item_name : itemName
			};
		} else {
			var itemObject = {};
		}
		var request = $.post("<?= base_url('api/controller_inventory/getAllAvailableItems') ?>", itemObject , 'json');

		request.done(function(response) {
			$('#borrowTable').empty();
			var result = jQuery.parseJSON(response);

			if (!result['error'].length) {
				for (var x = 0; x < result.data.length; x++ ) {
					var borrowCloneTable = $(".borrowCloneTable").find('.borrowToBeClonedTable').clone();
					var resultData = result.data[x];

					borrowCloneTable.attr('id', resultData.id);
					borrowCloneTable.find('.borrowId').text(resultData.id);
					borrowCloneTable.find('.borrowQuantity').text(resultData.remaining_qty);
					borrowCloneTable.find('.borrowItemName').text(resultData.item_name);
					borrowCloneTable.find('.borrowBrandModel').text(resultData.brand_model);
					borrowCloneTable.removeClass('borrowToBeClonedTable');

				 $("#borrowTable").append(borrowCloneTable);
				}
			}
		});
	}
</script>