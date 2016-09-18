<script type="text/javascript">
	$(document).ready(function(){
		/*********
		*	LOAD TABLE
		*********/
				populateAccountTable();


		/*******
		* EDIT MODAL
		*********/
			/*****
			*POPULATE EDIT MODAL
			********/
				$('#EditAccountModal').on('show.bs.modal', function(response) {
				    var source = $(response.relatedTarget);
				    currentRow = source.closest('tr');
				    responseID = currentRow.attr('id');

					$("#"+responseID).each(function() {
						var accountId = $(this).find(".accountId").text();
						var accountUsername = $(this).find(".accountUsername").text();
						var accountIdNumber = $(this).find(".accountIdNumber").text();
						var accountFirstname = $(this).find(".accountFirstname").text();
						var accountMiddlename = $(this).find(".accountMiddlename").text();
						var accountLastname = $(this).find(".accountLastname").text();
						var accountType = $(this).find('.accountType').text();

						$("[name=accountID]").val(accountId);
						$("[name=editUserUsername]").val(accountUsername);
						$("[name=editUserIdNumber]").val(accountIdNumber);
						$("[name=editUserFirstname]").val(accountFirstname);
						$("[name=editUserMiddlename]").val(accountMiddlename);
						$("[name=editUserLastname]").val(accountLastname);
					});
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
				var request = $.post("<?= base_url('api/controller_inventory/deleteAccount') ?>", id, 'json');

		    	request.done(function(response) {
		    		var result = jQuery.parseJSON(response);

		    		if(result['error'].length){
		    			console.log(result['error']);
		    		} else {
		    			$('#DeleteModal').modal('hide');
		    			window.location.reload();
		    		}
		    	});
		    });
			/*******
			* ADD ACCOUNT MODAL
			*********/
				/*RELOAD TABLE ON ADD MODAL CLOSE*/
				$('#addAccountModal').on('hidden.bs.modal', function () {
					populateInventoryTable();
				});

				$('#addAccountBtn').click(function(){
					$('#modalForm').attr('action','<?=base_url('api/controller_account/createAccount')?>');
					validator.resetForm();
				});

				$("#addAcountModal").on("hidden.bs.modal", function(){
				    $(".modal-body1").html("");
				});

				/*ADD MODAL VALIDATION*/
				var validator = $('#modalForm').validate({
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

	/* POPULATE TABLE */
	function populateAccountTable(){
		var request = $.post("<?= base_url('api/controller_account/getAccountList') ?>", {}, 'json');

		request.done(function(response){
			$('#userManagementTable').empty();
			var result = jQuery.parseJSON(response);
			console.log(result);

			if(!result['error'].length){
				for(var x = 0; x < result.data.length; x++){
					var accountCloneTable = $('.accountCloneTable').find('.accountToBeClonedTable').clone();
					var resultData = result.data[x];

					accountCloneTable.attr('id', resultData.user_id);
					accountCloneTable.find('.accountId').text(resultData.user_id);
					accountCloneTable.find('.accountUsername').text(resultData.username);
					accountCloneTable.find('.accountIdNumber').text(resultData.id_number);
					accountCloneTable.find('.accountFirstname').text(resultData.firstname);
					accountCloneTable.find('.accountMiddlename').text(resultData.middlename);
					accountCloneTable.find('.accountLastname').text(resultData.lastname);
					accountCloneTable.find('.accountType').text(resultData.account_type);
					accountCloneTable.removeClass('accountToBeClonedTable');

				 $("#userManagementTable").append(accountCloneTable);
				}
			}
		});
	}
</script>