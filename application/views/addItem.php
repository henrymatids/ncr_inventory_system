<div class="container">
	<h1>ADD ITEM</h1>
	<form method="post" action="<?php echo base_url()?>Inventory/addItem">
		<label for="item_name"></label>
		<input type="text" class="form-control" placeholder="Item name" name="item_name">
		<label for="quantity"></label>
		<input type="text" class="form-control" placeholder="Quantity" name="quantity">
		<!-- <label for="firstname"></label> -->
		<!-- <input type="text" class="form-control" placeholder="Confirm Password" name="conpassword">
		<label for="account_type"></label>
		<select class="form-control" name="account_type">
			<option>User</option>
			<option>Admin</option>
		</select> -->
		<br/>
		<input type="submit" class="btn btn-primary" name="submit" value="Submit">
		<input type="submit" class="btn btn-primary" name="inventory" value="Add User">
	</form>
</div>