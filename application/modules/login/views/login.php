  <div class="Absolute-Center is-Responsive">
    <div class="panel panel-default ">
    	<div class="panel-body">
        <div class="ncrLogo"></div>
      	<div name="panelContents" class="col-md-12">
          <!-- <form method="post" action=""> -->
            <!-- username field -->
    				<div class="form-group">
    	        <div class="input-group">
    	        	<span class="input-group-addon"><i class="fa fa-user"></i></span>
    	        	<input type="text" class="form-control onKeyEvent" name="username" placeholder="Username" aria-describedby="basic-addon1" required=""/>
    	        </div>
    				</div>
            <!-- end of username field -->
            <!-- password field -->
            <div class="form-group">
    					<div class="input-group">
    	        	<span class="input-group-addon"><i class="fa fa-lock"></i></span>
    	        	<input class="form-control onKeyEvent" type="password" name='password' placeholder="Password" required=""/>
    					</div>
            </div>
            <!-- end of password field -->
            <!-- login button -->
            <div class="form-group text-center">
            	<button type="submit" class="btn btn-success" onclick="loginButton()" id="loginBtn">Log in</button>
            </div>
            <!-- end of login button -->
            <!-- error div -->
            <div id="loginError" class="form-group text-center alert alert-danger loginErrorMessage">
              <p>Username or Password is incorrect</p>
            </div>
            <!-- end of error div -->
          <!-- </form> -->
      	</div>
        <!-- end of pannelContents -->
      </div>
      <!-- end of pannel-body -->
    <div>
    <!-- end of pannel -->
	</div>
