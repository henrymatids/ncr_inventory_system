<script type="text/javascript">
	$(document).ready(function(){
		$('#addAccountBtn').click(function(){
			$('#modalForm').attr('action','<?=base_url('api/controller_account/createAccount')?>');
			$('#modalForm').clearForm();
		});

		$("#addAcountModal").on("hidden.bs.modal", function(){
		    $(".modal-body1").html("");
		});


		$('#modalForm').validate({
			rules : {
				username : {
					required : true,
					minlength : 6
				},
				password : {
					required : true,
					minlength : 6
				},
				conpassword : {
					minlength : 6,
					equalTo : "#password"
				},		
				id_number : "required",
				firstname : "required",
				middlename : "required",
				lastname : "required"
			},
			messages : {
				username : {
					required : "Username is required",
					minlength : "Enter at least 6 characters"
				},
				password : {
					required : "Password is required",
					minlength : "Enter at least 6 characters"
				},
				conpassword : {
					minlength : "Enter at least 6 characters",
					equalTo : "Password didn't match."
				},
				id_number : "ID number is required",
				firstname : "Firstname is required",
				middlename : "Middlename is required",
				lastname : "Lastname is required"
			}
		});

		$('#modalForm').ajaxForm({
			beforeSubmit : function(data){
			},
			success : function(data){
				var result = JSON.parse(data);
				console.log(result);
				if(!result['error'].length){
					$('#username').val('');
					$('#password').val('');
					$('#id_number').val('');
					$('#firstname').val('');
					$('#middlename').val('');
					$('#lastname').val('');
				} else {
					console.log(result);
				}
				console.log('Form Submit');
				$('#addAccountModal').modal('hide');
			}
		});	
	});
</script>