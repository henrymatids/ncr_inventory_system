<script type="text/javascript">
	$(document).ready(function() {
  /****
  * LOAD TABLE
  ****/
		populateInventoryTable();

  /****
  *	SEARCH BAR
   ****/
		$('[name=searchBar').on('input', function(e){
			var searchBarValue = $(this).val();
			populateInventoryTable(searchBarValue);
		});

  /****
  * EDIT MODAL
  ****/
    /* POPULATE EDIT MODAL */
		$('#EditInventoryModal').on('show.bs.modal', function(response) {
	    var source = $(response.relatedTarget);
	    currentRow = source.closest('tr');
	    responseID = currentRow.attr('id');

			$("#"+responseID).each(function() {
				var invId = $(this).find(".invId").text();
				var invQuantity = $(this).find(".invQuantity").text();
				var invItemName = $(this).find(".invItemName").text();
				var invBrandModel = $(this).find(".invBrandModel").text();
				var invDateAcquired = $(this).find(".invDateAcquired").text();
				var invRemarks = $(this).find(".invRemarks").text();

				$("[name=itemID]").val(invId);
				$("[name=editItemQuantity]").val(invQuantity);
				$("[name=editItemName]").val(invItemName);
				$("[name=editItemBrand]").val(invBrandModel);
				$("[name=editItemDate]").val(invDateAcquired);
				$("[name=editItemRemarks]").val(invRemarks);
			});
		});

		$('#EditInventoryModal').on('show.bs.modal',function(){
			$('#editItemModalForm').attr('action','<?=base_url('api/controller_inventory/updateItem')?>');
		});

		$('#EditInventoryModal').ajaxForm({
				beforeSubmit : function(data){
					console.log('before submit');
				},
				success : function(data){
					console.log('success');
					$('#EditInventoryModal').modal('hide');
					populateInventoryTable();
				}
			});

  /****
  * DELETE MODAL
  ****/
    /* GET ID */
    $("#DeleteModal").on('show.bs.modal', function(response) {
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
				itemId : $("[name=deleteModalID]").attr("id")
			};
		var request = $.post("<?= base_url('api/controller_inventory/deleteItem') ?>", id, 'json');

    	request.done(function(response) {
    		var result = jQuery.parseJSON(response);

    		if(result['error'].length){
    			console.log(result['error']);
    		} else {
    			$('#DeleteModal').modal('hide');
    			populateInventoryTable();
    		}
    	});
    });


  /****
  * ADD MODAL
  ****/
    /* RELOAD TABLE ON ADD MODAL CLOSE */
		$('#addItemModal').on('hidden.bs.modal', function () {
			populateInventoryTable();
		})

    /* ADD MODAL VALIDATION */
		$('#addItemBtn').click(function(){
			$('#modalForm').attr('action','<?=base_url('api/controller_inventory/addItem')?>');
			validator.resetForm();
		});

		var validator = $('#modalForm').validate({
			rules : {
				quantity : 'required',
				item_name : 'required',
				brand_model : 'required',
				date_acquired : 'required',
				remarks : 'required'
			},
			messages : {
				quantity : 'Quantity is required.',
				item_name : 'Item name is required.',
				brand_model : 'Brand model is required.',
				date_acquired : 'Date acquired is required.',
				remarks : 'Remarks is required.'
			}
		});

		$('#modalForm').ajaxForm({
			beforeSubmit : function(data){
			},
			success : function(data){
				var result = JSON.parse(data);
				console.log(result);
				if(!result['error'].length) {
					$('#quantity').val('');
					$('#item_name').val('');
					$('#brand_model').val('');
					$('#date_acquired').val('');
					$('#remarks').val('');
				} else {
					console.log(result);
				}
				console.log('Form Submit');
				$('#addItemModal').modal('hide');
			}
		});
		$('#addItemModal, #EditInventoryModal').on('show.bs.modal', function(){
				$("[name=date_acquired], [name=editItemDate]").datepicker({
					 autoclose : true,
					 todayHighlight : true,
					 toggleActive : true,
					 format : "yyyy/mm/dd"
				}).datepicker("setDate", new Date());
		});
	});

	/****
	* POPULATE TABLE
	****/
	function populateInventoryTable(itemName = false) {
		if (itemName) {
			var itemObject = {
				item_name : itemName
			};
		} else {
			var itemObject = {};
		}
		var request = $.post("<?= base_url('api/controller_inventory/getInventoryList') ?>",itemObject , 'json');

		request.done(function(response) {
			$('#inventoryTable').empty();
			var result = jQuery.parseJSON(response);
			
			if (!result['error'].length) {
				for (var x = 0; x < result.data.length; x++ ) {
					var invCloneTable = $(".invCloneTable").find('.invToBeClonedTable').clone();
					var resultData = result.data[x];

					invCloneTable.attr('id', resultData.id);
					invCloneTable.find('.invId').text(resultData.id);
					invCloneTable.find('.invQuantity').text(resultData.qty);
					invCloneTable.find('.invAvailableQuantity').text(resultData.remaining_qty);
					invCloneTable.find('.invItemName').text(resultData.item_name);
					invCloneTable.find('.invBrandModel').text(resultData.brand_model);
					invCloneTable.find('.invDateAcquired').text(resultData.date_acquired);
					invCloneTable.find('.invRemarks').text(resultData.remarks);
					invCloneTable.removeClass('invToBeClonedTable');

				 $("#inventoryTable").append(invCloneTable);
				}
			}
		});
	}

</script>
