<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<!-- Bootstrap plugin -->
	<?=plugin_css('bootstrap/css/bootstrap.min.css');?>
	<!-- Font Awesome -->
	<?=plugin_css('font_awesome/css/font-awesome.min.css');?>
	<!-- Custom made css -->
	<?=css('custom.css');?>
</head>
<body>
	<div class="container">
	  	<div class="row">
		    <div class="panel panel-default Absolute-Center is-Responsive">
		    	<div class="panel-body">
		      	<div id="logo-container"></div>
		      	<div class="col-sm-12 col-md-12 col-lg-12">
			        <form method="post" action="">
				        <div class="form-group input-group">
				        	<span class="input-group-addon"><i class="fa fa-user"></i></span>
				        	<input type="text" class="form-control" name="username" placeholder="Username" aria-describedby="basic-addon1" required=""/>         
				        </div>
				        <div class="form-group input-group">
				        	<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				        	<input class="form-control" type="password" name='password' placeholder="Password" required=""/>     
				        </div>
				        <div class="form-group text-center">
				        	<button type="submit" class="btn btn-success">Log in</button>
				        </div>
				        <div class="form-group text-center"></div>
			        </form>        
		      	</div>
	        </div>
	    	</div>    
 		</div>

	</div>
</body>
</html>