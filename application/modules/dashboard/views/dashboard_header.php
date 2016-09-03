<!DOCTYPE html>
<html>
  <?php
    if ($this->session->userdata['user_isLoggedIn'] === false) {
        redirect(base_url('login'));
    }
    $userType = $this->session->userdata['user_currentlyloggedIn']['userType'];
    $userName = $this->session->userdata['user_currentlyloggedIn']['username'];
  ?>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- Meta, title, CSS, favicons, etc. -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  	<title><?= $activeHeaders ?></title>
  	<!-- Bootstrap plugin -->
  	<?=plugin_css('bootstrap/css/bootstrap.min.css');?>
    <?=plugin_css('bootstrap/css/bootstrap.css');?>
  	<!-- Font Awesome -->
  	<?=plugin_css('font_awesome/css/font-awesome.min.css');?>
  	<!-- Custom made css -->
  	<?=css('dashboard.css');?>
    <!-- Javascript -->
    <?=script('jquery.js');?>
    <?=plugin_script('bootstrap/js/bootstrap.min.js');?>
  </head>
  <body>
    <div class="header">
       <div class="container">
          <div class="row">
             <div class="col-md-5">
                <!-- Logo -->
                <div class="logo">
                   <h1><a href="index.html">NCR Inventory</a></h1>
                </div>
             </div>
             <div class="col-md-5">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="input-group form">
                         <input type="text" class="form-control" placeholder="Search...">
                         <span class="input-group-btn">
                           <button class="btn btn-primary" type="button">Search</button>
                         </span>
                    </div>
                  </div>
                </div>
             </div>
             <div class="col-md-2">
                <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                      <ul class="nav navbar-nav">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $userName ?> <b class="caret"></b></a>
                          <ul class="dropdown-menu animated fadeInUp">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="<?= base_url('login/logout') ?>">Logout</a></li>
                          </ul>
                        </li>
                      </ul>
                    </nav>
                </div>
             </div>
          </div>
       </div>
    </div>
   <div class="page-content">
      <div class="row">
        <div class="col-md-2">
          <div class="sidebar content-box" style="display: block;">
                  <ul class="nav">
                    <?php if($userType === 'Admin') { ?>
                      <!-- Main menu -->
                      <li class="current"><a href="index.html"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                      <li><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
                      <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                      <li><a href="tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
                      <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
                      <li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
                      <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>
                      <li class="submenu">
                           <a href="#">
                              <i class="glyphicon glyphicon-list"></i> Pages
                              <span class="caret pull-right"></span>
                           </a>
                           <!-- Sub menu -->
                           <ul>
                              <li><a href="login.html">Login</a></li>
                              <li><a href="signup.html">Signup</a></li>
                          </ul>
                      </li>
                    <?php } else if ($userType === 'Staff'){ ?>
                      <!-- Main menu -->
                      <li class="current"><a href="index.html"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                      <li><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
                      <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                      <li><a href="tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
                    <?php } else { ?>
                      <!-- Main menu -->
                      <li class="current"><a href="index.html"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <?php } ?>
                  </ul>
          </div>
        </div>
        <div class="col-md-10">
          <div class="row">
