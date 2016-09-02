<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="assets/images/NCR-logo.png" style="width:50px; height:auto; "></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">About</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Sign in</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--END OF NAVIGATION BAR-->
<div class="container">
	<div class="row"></div>
	<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
			<div class="row">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Registration form</h3>	
					</div>
					<div class="panel-body">
						<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
						<form method="post" action="">
							<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
								<div class="form-group">
									<label for="firstname">Firstname</label>
									<input type="text" class="form-control" name="firstname" placeholder="Firstname">
									<label for="middlename">Middlename</label>
									<input type="text" class="form-control" name="middlename" placeholder="Middlename">
									<label for="lastname">Lastname</label>
									<input type="text" class="form-control" name="lastname" placeholder="Lastname">
									<label for="contact_number">Contact number</label>
									<input type="text" class="form-control" name="contact_number" placeholder="Contact number">
									<label for="user_type">Account Type</label>
									<div class="dropdown">
									  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									    Dropdown
									    <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
									    
									  </ul>
									</div>
								</div>
							</div>
						</form>
						<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
	</div>
	<div class="row"></div>
</div>