<script type="text/javascript">
	$(document).ready(function(){
		var request = $.post("<?= base_url('api/controller_inventory/getInventoryList') ?>", {} , 'json');

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
					invCloneTable.find('.invItemName').text(resultData.item_name);
					invCloneTable.find('.invBrandModel').text(resultData.brand_model);
					invCloneTable.find('.invDateAc1uired').text(resultData.date_acquired);
					invCloneTable.find('.invRemarks').text(resultData.remarks);
					invCloneTable.removeClass('invToBeClonedTable');

					$("#inventoryTable").append(invCloneTable);
				}
			}
		});

		$('#EditInventoryModal').on('show.bs.modal', function(response){
	    var source = $(response.relatedTarget);
	    currentRow = source.closest('tr');
	    responseID = currentRow.attr('id');

			$("#"+responseID).each(function(){
				var invId = $(this).find(".invId").text();
				var invQuantity = $(this).find(".invQuantity").text();
				var invItemName = $(this).find(".invItemName").text();
				var invBrandModel = $(this).find(".invBrandModel").text();
				var invDateAc1uired = $(this).find(".invDateAc1uired").text();
				var invRemarks = $(this).find(".invRemarks").text();

				$("[name=itemID]").val(invId);
				$("[name=editItemQuantity]").val(invQuantity);
				$("[name=editItemName]").val(invItemName);
				$("[name=editItemBrand]").val(invBrandModel);
				$("[name=editItemDate]").val(invDateAc1uired);
				$("[name=editItemRemarks]").val(invRemarks);
			});
		});

		$('#addItemModal').on('hidden.bs.modal', function () {
		  $("#inventoryTable").ajax.reload();
		})

		$('#addItemBtn').click(function(){
			$('#modalForm').attr('action','<?=base_url('api/controller_inventory/addItem')?>');
			$('#modalForm').clearForm();
		});

		$('#modalForm').validate({
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
				if(!result['error'].length){
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
	});

</script>
