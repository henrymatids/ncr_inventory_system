<script type="text/javascript">
	$(document).ready(function(){
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