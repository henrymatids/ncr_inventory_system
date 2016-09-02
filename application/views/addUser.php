<div class="container">
	<h1>ADD USER</h1>
	<form method="post" action="<?php echo base_url()?>home/addUser">
		<label for="firstname"></label>
		<input type="text" class="form-control" placeholder="Username" name="username">
		<label for="middlename"></label>
		<input type="password" class="form-control" placeholder="Password" name="password">
		<label for="firstname"></label>
		<input type="password" class="form-control" placeholder="Confirm Password" name="conpassword">
		<label for="account_type"></label>
		<select class="form-control" name="account_type">
			<option>User</option>
			<option>Admin</option>
		</select>
		<br/>
		<input type="submit" class="btn btn-primary" name="submit" value="Submit">
		<input type="submit" class="btn btn-primary" name="accounts" value="Add Item">
	</form>
</div>