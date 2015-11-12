<?php
include("MainClass.class.php");
$object=new MainClass();
$subjectsArray=$object->getAllSubject();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	
	<title>Tutor|Register</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/style.css">
	
	 

  </head>

<body>
	
<div class="navbar navbar-inverse">   
<div class="container"> 
  <nav class="navbar navbar-static-top" role="navigation">
           <div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html">
					<!-- <img src="assets/images/logo.png" alt="Techro HTML5 template">--></a>
			<span style="color:#3d84e6"><h2>STEM</h2></span>
			</div>
            
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav pull-right mainNav">
					<li><a href="index.php">Courses</a></li>
					<!-- <li><a href="login.html">Student</a></li> -->
					 <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Student<b class="caret"></b></a> 
                        <ul class="dropdown-menu">
                            <li><a href="login_student.html">Login</a></li>
                            <li class="active"><a href="studentregister.php">Register</a></li>
                         </ul>
                    </li>
					<li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tutor<b class="caret"></b></a> 
                        <ul class="dropdown-menu">
                           <li><a href="login.html">Login</a></li>
                            <li class="active"><a href="register_tutor.php">Register</a></li>
                         </ul>
                    </li>
					<li><a href="contact.html">Contact</a></li>                  
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
</div>
</div>

		<header id="head" class="secondary">
            <div class="container">
                    <h1> Tutor Registration</h1>
                    <p> </p>
                </div>
    </header>


	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3 class="section-title">Tutor Register Here</h3>
						<form class="form-light mt-20" action="insert_data.php?action=insert_tutor_reg" method="post" role="form">
							<div class="form-group">
								<label>UserName</label>
								<input type="text" class="form-control" name="tutor_name" placeholder="Enter Your Name">
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Email ID</label>
										<input type="email" name="emailid" class="form-control" placeholder="Enter Email ID">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Password</label>
										<input type="password" name="password" class="form-control" placeholder="Enter Password">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Confirm Password</label>
										<input type="password" name="Confirmpassword" class="form-control" placeholder="Enter Confirm Password">
									</div>
								</div>
							</div>
                             <div class="form-group">
								<label>Phone Number</label>
								<input type="text" name="phone_number" class="form-control" placeholder="Enter Your Phone Number">
							</div>
							<div class="form-group">
								<label>Select Subject</label><br>
								<?php
									foreach($subjectsArray as $subject){
								?>
									<input type="checkbox" name="subject[]" value="<?=$subject[0]?>"><?=$subject[1]?>&nbsp;&nbsp;
								<?php
									}
								?>
	                <br>			
							</div>
							 <div class="form-group">
								<label>Working Hours</label>
								<select class="form-control" name="working_hours">
								<option>Select Hours</option>
								  <option value="01">01</option>
								   <option value="02">02</option>
								   <option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
							</select>

							</div>
							 <div class="form-group">
								<label>Working Days</label><br>
								<?php
								$weekDaysArray=array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
								foreach($weekDaysArray as $day){
								?>
								<input type="checkbox" name="working_days[]" value="<?=$day?>"/><?=$day?>&nbsp;&nbsp;&nbsp;								<?}?>
								<?php 
								}
								?>
							</div>
							
							<button type="submit" name="action" value="insert_tutor_reg" class="btn btn-two">Submit</button><p><br/></p>
						</form>
					</div>
					
				</div>
			</div>
	<!-- /container -->

	 <footer id="footer">
 
		<div class="container">
   	<!-- <div class="social text-center">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-flickr"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>
			</div> -->

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

				<!--	<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="index.html">Home</a> | 
								<a href="about.html">About Us</a> |
								<a href="courses.html">Courses</a> |
								<a href="login.html">Login</a> |
								<a href="register.html">Register</a> |
								<a href="contact.html">Contact</a>
							</p>
						</div>
					</div>-->

					<div class="col-md-6 panel">
						<!-- <div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2015. Template by <a href="www.smartmindsteam.com" rel="develop">www.smartmindsteam.com</a>
							</p>
						</div> -->
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>


	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>

	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="assets/js/google-map.js"></script>


</body>
</html>
