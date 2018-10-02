<!DOCTYPE html>
<html>
<head>
	<title>LMS</title>
	<script defer src="fontawesome/svg-with-js/js/fontawesome-all.js"></script>
	<link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
	<link href="bootstrap/dist/css/style.css" rel="stylesheet" />
  <script src="bootstrap/dist/js/login.js"></script>
</head>
<body>
<!-- LOGIN BUTTON --> 
<div class="container-fluid cf2" id="loginDiv">
    <div class="col-md-12 col-xs-6 login">
      <form method="POST" action="/login">
          <div class="col-md-10 col-xs-12 stl">
              <label class="logf">Student Login</label>
          </div>
          <div align="right" class="col-md-2 col-xs-6 stl">
              <i class="fas fa-times" onclick="hide_login();"></i>
          </div>
          <div class="col-md-12 col-xs-6">
              <input type="text" placeholder="Email"; class="form-control"><br>
              <input type="password" placeholder="Password"; class="form-control"><br>
              <a href="forgot.php" class="fp">Forgot password?</a>
          <div align="center" class="col-md-12 col-xs-6 lbtn">
              <b><input type="submit" value="LOGIN"; class="lbtn1"></b>
          </div>    
          </div>
      </form>
    </div>
</div>
<!-- LOGIN BUTTON END -->

<!--HEADER-->
<!-- HEADER-TOP-DIV -->
    
<div class="container-fluid">
	<div class="row hd1">
		<div class="col-md-12 col-xs-12 top">
			<div class="col-md-1 col-xs-12">
			</div>
			<div align="right" class="col-md-2 col-xs-12">
				<i class="fas fa-phone"></i>
				<label class="frstt">+917508571600</label>
			</div>
			<div align="right" class="col-md-4 col-xs-12">
				<i class="fas fa-map-marker-alt"></i>
				<label class="frstt">#4543, G.T Road, Near Ganga Building, Amritsar-143001</label>
			</div>
			<div align="right" class="col-md-3 col-xs-12">
				<i class="far fa-clock"></i>
				<label class="frstt">Mon - Sat 10.00Am - 6.00Pm</label>
		    </div>
		    <div align="right" class="col-md-2 col-xs-12">
				<i class="fas fa-user"></i>
				<a onclick="show_login();" class="alogin">Login</a><label class="frstt"> | </label><a href="#sign_up" class="alogina">Register</a>
            </div>
			<div class="col-md-1 col-xs-12">
			</div>
		</div>
	</div>
</div>

<!-- END OF HEADER-TOP-DIV -->

<!-- NAVBAR -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid cf1">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Leaning Managment System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ url('/')}}">HOME</a></li>
      <li><a href="{{ url('/course')}}">COURSES</a></li>
    </ul>
  </div>
</nav>

<!-- END OF NAVBAR -->