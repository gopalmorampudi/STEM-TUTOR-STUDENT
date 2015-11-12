<?php
session_start();
include "dbconnection.php";
$action=$_REQUEST['action'];
?>
<!DOCTYPE html>
<html>
  <head>
		<meta charset="UTF-8">
		<title>Admin |Tuition</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.4 -->
		<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<!-- Font Awesome Icons -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<!-- Ionicons -->
		<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
		<!-- Theme style -->
		<link href="./dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
		<!-- AdminLTE Skins. Choose a skin from the css/skins
		folder instead of downloading all of them to reduce the load. -->
		<link href="./dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

	</head>
	<body class="skin-blue sidebar-mini">
		<div class="wrapper">

			<header class="main-header">
				<!-- Logo -->
				<a href="#" class="logo"> <!-- mini logo for sidebar mini 50x50 pixels --> <span class="logo-mini"><b>Admin</b></span> <!-- logo for regular state and mobile devices --> <span class="logo-lg"><b>STEM</b></span> </a>
				<!-- Header Navbar: style can be found in header.less -->
				<nav class="navbar navbar-static-top" role="navigation">
					<!-- Sidebar toggle button-->
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<!-- User Account: style can be found in dropdown.less -->
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="./dist/img/user2-160x160.jpg" class="user-image" alt="User Image" /> <span class="hidden-xs">Admin</span> </a>
								<ul class="dropdown-menu">
									<!-- User image -->
									<li class="user-header">
										<img src="./dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
										<p>
											<small> Nov. 2015</small>
										</p>
									</li>
									<!-- Menu Body -->

									<!-- Menu Footer-->
									<li class="user-footer">
										<div class="pull-left">
											<a href="#" class="btn btn-default btn-flat">Profile</a>
										</div>
										<div class="pull-right">
											<a href="logout.php" class="btn btn-default btn-flat">Log out</a>
										</div>
									</li>
								</ul>
							</li>
							<!-- Control Sidebar Toggle Button -->

						</ul>
					</div>
				</nav>
			</header>
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar">
				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">
					<!-- Sidebar user panel -->
					<div class="user-panel">
						<div class="pull-left image">
							<img src="./dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
						</div>
						<div class="pull-left info">
							<p>
								Admin
							</p>
							<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
						</div>
					</div>
									<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu">
<li class="header">MENU NAVIGATION</li>
<li class="treeview active">
  <a href="#">

<span>Courses </span>
<i class="fa fa-angle-left pull-right"></i>
  </a>
<ul class="treeview-menu">
<li><a href="view_subject.php"></i>View Courses </a></li>
<li><a href="add_subjects_form.php"></i>Add Courses </a></li>
</ul>
</li>
<li class="treeview active">
  <a href="#">

<span>Depatment </span>
<i class="fa fa-angle-left pull-right"></i>
  </a>
<ul class="treeview-menu">
<li><a href="view_dept.php"></i>View Depatments </a></li>
<li><a href="add_department.php"></i>Add Depatment </a></li>
</ul>
</li>
<li class="treeview">
<a href="schedule_classes.php">
<span>View Scheduled classes</span>
</a>
</li>

<li class="treeview">
  <a href="#">

<span>Tutor</span>
<i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="treeview-menu">
  <!--<li class="active"><a href="tutor_request.php"></i>Accept/Reject Request</a></li>-->
  <li><a href="view_all_tutor.php"></i>View All Tutors</a></li>
<!--<li><a href="products.php"><i class="fa fa-table"></i>View Available Tutors</a></li>
<li><a href="#"><i class="fa fa-plus-square"></i>view Assigned Tutors</a></li>-->
  </ul>
<!--</li>
<li class="treeview">
<a href="#">
<i class="fa fa-suitcase"></i>
<span>Student Course Request</span>
<i class="fa fa-angle-left pull-right"></i>
</a>
</li>-->
<li class="treeview">
<a href="#">

<span>Students</span>
<i class="fa fa-angle-left pull-right"></i>
</a>
<ul class="treeview-menu">
<!--<li><a href="student_request.php"></i>Accept/Reject Request</a></li>-->
<li><a href="student_course_request.php"></i>Student Course Request</a></li>
<li><a href="view_all_student.php"></i>View All Students</a></li>
<!--<li><a href="#"><i class="fa fa-plus-square "></i>View Available Students</a></li>
<li><a href="#"><i class="fa fa-plus-square"></i>view Assigned Students</a></li>-->
</ul>
</li>
<li class="treeview">
<a href="view_complaint.php">

<span>complaints</span>

</a>
</li>
<!--<li class="treeview">
<a href="#">
<i class="fa fa-edit"></i>
<span>Reviews</span>
<i class="fa fa-angle-left pull-right"></i>
</a>
</li>-->
<li class="treeview">
<a href="changepass.php?action=admin">

<span>change Password</span>

</a>
<!--<ul class="treeview-menu">
<li><a href="#"><i class="fa fa-table"></i>View Discounts</a></li>
<li><a href="#"><i class="fa fa-plus-square"></i>Add Discounts</a></li>
</ul>-->
</li>
<li class="treeview">
<a href="logout.php">

<span>Logout</span>

</a>
</li>
</ul>
				</section>
				<!-- /.sidebar -->
			</aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            
          </h1>
         <!-- <ol class="breadcrumb">
            <li><a href="brands.php"></i></a></li>
            <li><a href="add_Brands.php">  </a></li>
          </ol>-->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary"> 
                <div class="box-header with-border">
<h3 class="box-title"> 
<a><i class="fa fa-arrow-right"></i><b>Change Password</b></a>
</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
               <form role="form" action="insert_data1.php" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                     	<div class="form-group">
                     	


</head>
<script>
	function validateLoginForm(){
		var oldpswd=$("#oldpswd").val();
		var newpswd=$("#newpswd").val();
		var confpswd=$("#confpswd").val();
		var errorMessage='';
		errorMessageFinal='';
		if(oldpswd!='' && newpswd!='' && confpswd!=''){
			if(newpswd==confpswd){
				return true;
			}else{
				errorMessage+='<li>New Password and Confirm Password Should be match!</li>';
				errorMessageFinal="<ul style='color:red'>"+errorMessage+"</ul>";
			
				if(errorMessageFinal!=''){
					$("#errorMessages").html(errorMessageFinal);
				}
				return false;
			}
			
		}else{
			
			if(oldpswd==''){
				errorMessage+='<li>Please Enter Old Password</li>';
			}
			if(newpswd==''){
				errorMessage+='<li>Please Enter New Password</li>';
			}
			if(confpswd==''){
				errorMessage+='<li>Please Enter Confirm Password</li>';
			}
			
			errorMessageFinal="<ul style='color:red'>"+errorMessage+"</ul>";
			
			if(errorMessageFinal!=''){
				$("#errorMessages").html(errorMessageFinal);
			}
			return false;
		}
	}
</script>

<body>
<?php
if($action=='admin'){
?>

 <div class="control-group" id="errorMessages" style=""></div>
         	
<?php
  
 if(!empty($_REQUEST['messg'])){
if($_REQUEST['messg']=='success'){ ?>
  <div style="color:green">Your Password Updated successfully</div>
  <?php }
  if($_REQUEST['messg']=='fail'){ ?>
  <div style="color:red">You Entered Old Password Wrong</div>
  <?php 
  }
}
  
?>
<form action="insert_data1.php" method="post" onsubmit="return validateLoginForm()">
 <p>Old Password</p>
 <input type="password" class="form-control" name="oldpassword" id="oldpswd" name="oldpassword"  "required"/>
 <p>New Password</p>
 <input type="password" class="form-control" name="newpassword" id="newpswd" name="newpassword" "required"/>
 <p>Confirm Password</p>
 <input type="password" class="form-control" name="confpassword" id="confpswd" name="confpassword" "required"/><br><br>
 
 <button type="submit" class="btn btn-primary" value="change_password" name="action">submit</button>
 </form>
 <?php
}else if($action=='student'){
	?>
	<h3>Change Password</h3>
 <div class="control-group" id="errorMessages" style=""></div>
         	
<?php
  
 if(!empty($_REQUEST['messg'])){
if($_REQUEST['messg']=='success'){ ?>
  <div style="color:green">Your Password Updated successfully</div>
  <?php }
  if($_REQUEST['messg']=='fail'){ ?>
  <div style="color:red">You Entered Old Password Wrong</div>
  <?php 
  }
}
  
?>
<form action="insert_data1.php" method="post" onsubmit="return validateLoginForm()">
 <p>Old Password</p>
 <input type="password" name="oldpassword" id="oldpswd" name="oldpassword" "required"/>
 <p>New Password</p>
 <input type="password" name="newpassword" id="newpswd" name="newpassword" />
 <p>Confirm Password</p>
 <input type="password" name="confpassword" id="confpswd" name="confpassword" /><br><br>
 
 <button type="submit" value="student_change_password" name="action">submit</button>
 </form>
	<?php
}else if($action=='tutor'){
	?>
	<h3>Change Password</h3>
 <div class="control-group" id="errorMessages" style=""></div>
         	
<?php
  
 if(!empty($_REQUEST['messg'])){
if($_REQUEST['messg']=='success'){ ?>
  <div style="color:green">Your Password Updated successfully</div>
  <?php }
  if($_REQUEST['messg']=='fail'){ ?>
  <div style="color:red">You Entered Old Password Wrong</div>
  <?php 
  }
}
  
?>
<form action="insert_data1.php" method="post" onsubmit="return validateLoginForm()">
 <p>Old Password</p>
 <input type="password" name="oldpassword" id="oldpswd" name="oldpassword" "required"/>
 <p>New Password</p>
 <input type="password" name="newpassword" id="newpswd" name="newpassword" "required"/>
 <p>Confirm Password</p>
 <input type="password" name="confpassword" id="confpswd" name="confpassword" "required"/><br><br>
 
 <button type="submit" value="tutor_change_password" name="action" class="btn btn-primary">submit</button>
 </form>
	<?php
}
 ?>
 </div><!-- /.box-body -->
                  <div class="box-footer">
                    
                  </div>
                </form>
              </div><!-- /.box -->

             
            
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
    </div><!-- ./wrapper -->
<footer class="main-footer">
<div class="pull-right hidden-xs">
<b></b> 
</div>

</footer>
    <!-- jQuery 2.1.4 -->
    <script src="./plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="./bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="./plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="./dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="./dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>