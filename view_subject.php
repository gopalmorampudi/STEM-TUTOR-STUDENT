<?php
session_start();
include"dbconnection.php";
$dept=$_SESSION['dept'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>Student|Login</title>
	
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/style.css">
	
<script src="jquery-1.9.0.min.js"></script>
<script>
var subID='';
 function showTutor(sel) {
                        var subject_id = sel.options[sel.selectedIndex].value;
						//alert(subject_id);
                        $("#output1").html("");
                        $("#output2").html("");
                        if (subject_id.length > 0) {
							
                            $.ajax({
                                type: "GET",
                                url: "fetch_tutor.php",
                                data: "subject_id=" + subject_id,
                                cache: false,
                                beforeSend: function() {
                                    $('#output1').html();
                                },
                                success: function(html) {
                                    $("#output1").html(html);
                                }
                            });
                        }
                    }
</script>
  <!-- Place this tag after the last widget tag. -->
<script type="text/javascript">
                                (function() {
                                    var po = document.createElement('script');
                                    po.type = 'text/javascript';
                                    po.async = true;
                                    po.src = 'https://apis.google.com/js/platform.js';
                                    var s = document.getElementsByTagName('script')[0];
                                    s.parentNode.insertBefore(po, s);
                                })();
</script>
<script>
function f(id){
	//alert(id.id);
	var xmlhttp;
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
		//alert(xmlhttp.responseText);
    document.getElementById("output2").innerHTML=xmlhttp.responseText;
    }
  }
  var url="student_view_tutor_grid.php?type=getTutorSchedule&id="+id.id+"&sid="+document.getElementById('sid').value;
xmlhttp.open("GET",url,true);
xmlhttp.send();

}
</script>

</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html">
					<!-- <img src="assets/images/logo.png" alt="Techro HTML5 template">--></a>
			<span style="color:#3d84e6"><h2>STEM</h2></span>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li><a href="Student_profile.php">View Profile</a></li>
					<li><a href="view_subject.php">Make appointment</a></li>
					<li>
		<!--<a href="class_history.php?usertype=student&classtype=current">Class Details</a></li>-->
		<a href="become_tutor_req.php">Become tutor</a>
					<li><a href="change_password.php">Change Password</a></li>
					<li><a href="student_logout.php">Logout</a></li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

		<header id="head" class="secondary">
            <div class="container">
                    <h1>View Courses</h1>
                    <p></p>
                </div>
    </header>
<!-- container -->
	<div class="container">
				<div class="row">			
								<div class="col-md-4">
								<div>
								<label>Select Course</label>
								<select class="form-control" name="subject" onChange="showTutor(this);" id="sid">
									<option value="">Select Course</option>
										<?php
										echo $sql="select * from subject where dept_id='$dept'";
										$result=mysql_query($sql);
										while($res=mysql_fetch_array($result)){
										?>
										<option value="<?=$res['subject_id']?>"><?=$res['subject_name']?></option>
										<?php
										}
									?>
									</select>
							</div>
							<input type="checkbox" name="checkCourse" id="checkCourse" value="courseNotExists" onchange="disp(this,limited)">&nbsp;<span>Course Unavailable</span>
							<input type="checkbox" name="limited" id="limited" value="limited" onchange="disp(this,checkCourse)">&nbsp;<span>Course Coverage limited</span>
								</div>
								<div class="col-md-4">
								<div>
							
								</div>
								</div>
							</div>
							</div>
			
				
				<div class="container" id="appGrid">
			<div class="row">
							
								<div class="col-md-12">
			<div id="output1"></div>
					
					 
	<div class="container">
				<div class="row">
	<div id="output2"></div>
	</div>
	</div>
</div>
</div></div>
<div class="container" style="display:none" id='dispTextBox'>
<form action="course-notifications.php" method="post">
<input type="hidden" name="optionType" id="optionType"><br>
<textarea name="courseNotThere" rows="5" cols="50"></textarea><br>
<button type="submit">submit</button>
</form>
</div>

	
	
	<!-- /container -->
<footer>

</footer>
	  





<script>
function disp(id,id2){
	if(id.checked==true){
		if(id2.checked==true) id2.checked=false;
		document.getElementById('dispTextBox').style.display="block";
		document.getElementById('optionType').value=id.value;
		document.getElementById('appGrid').style.display="none";
	}
	else{
		document.getElementById('dispTextBox').style.display="none";
		document.getElementById('appGrid').style.display="block";
	}
}

function disp1(id){
	if(id.checked==true){
		document.getElementById('selectForm').style.display="block";
	}else{
		document.getElementById('selectForm').style.display="none";
	}
}
</script>



</body>
</html>
