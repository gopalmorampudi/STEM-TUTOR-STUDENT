<?php
include 'dbconnection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>Student|Register</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/style.css">
	
</head>

<body>
	<!-- Fixed navbar -->
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
	<!-- /.navbar -->

		<header id="head" class="secondary">
            <div class="container">
                    <h1>Student Register Here</h1>
                    <p>  </p>
                </div>
    </header>


	<!-- container -->
	<div class="container">
				<div class="row">
<div class="col-md-6">
						<h3 class="section-title">Student Register Here</h3>
						<form class="form-light mt-20" action="insert_data.php?action=new_student" method="post" role="form">
							<div class="form-group">
								<label>UserName</label>
								<input type="text" name="student_name" class="form-control" placeholder="Enter Your Name">
							</div>
							
									<div class="form-group">
										<label>Password</label>
										<input type="password" name="password" class="form-control" placeholder="Enter Password">
									</div>
								
								
									<div class="form-group">
										<label>Confirm Password</label>
										<input type="password" name="Confirmpassword" class="form-control" placeholder="Enter Confirm Password">
									</div>
								
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Email ID</label>
										<input type="email" name="emailid" class="form-control" placeholder="Enter Email ID">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group" >
										<label>Major</label>
										<select name="major" class="form-control">
											<option value="">Select Major</option>
											<?php
											$sql="select * from departments";
											$result=  mysql_query($sql);
											while($row=mysql_fetch_array($result)){
											?>
												<option value="<?=$row['dept_id']?>"><?=$row['dept_name']?></option>
											<?php	
											}
											?>
										<option value="others">others</option>
										</select>
									</div>
								</div>
								
							</div>
							
							<button type="submit" name="action" value="new_student" class="btn btn-two">Submit</button><p><br/></p>
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