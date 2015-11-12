<?php
session_start();
include "DBConnection.php";
// echo $date1 = date('l', mktime(0, 0, 0, date('m'), date('d') +0, date('Y'))).'<br>';
//$weekDaysArray=array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
$user=$_SESSION['tutor_id'];
?>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>Tutor</title>
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
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html">
					<!-- <img src="assets/images/logo.png" alt="Techro HTML5 template"> --></a>
			<span style="color:#3D84E6"><h2>STEM</h2></span>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li><a href="tutor_profile.php">Tutor Profile</a></li>
					<li class="active"><a href="test.php">Make Shedule</a></li>
					<li><a href="view_tutor_schedule.php">View Shedule</a></li>
					<!--<li><a href="tutor_classes_details.php?usertype=tutor&classtype=current">Classes</a></li>-->
					<li><a href="tutor_changepwd.php">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
					
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->
	<header id="head" class="secondary">
            <div class="container">
                    <h2>Tutor</h2>
                    <h4></h4>
                </div>
    </header>
<table class="table" border style="border-collapse:collapse;">
<?php
for($i=0;$i<7;$i++){
 $date=date('Y-m-d', mktime(0, 0, 0, date('m'), date('d') + $i, date('Y')));
 $test=date('Y-m-d l', mktime(0, 0, 0, date('m'), date('d') + $i, date('Y')));
  $weekDayName=date('l', mktime(0, 0, 0, date('m'), date('d') + $i, date('Y')));
 //ltrim($weekDayName," ");
 if(!strpos($test,'Sunday')){
	 if(!strpos($test,'Saturday')){
	// echo (!strpos($weekDayName,'Sunday'));
?>
<form action="tut_sched_grid.php" method="post">
<tr>
<th>
<?=$date?><br><?=$weekDayName?>
<input type="hidden" name='date' value="<?=$date?>"/>
<input type="hidden" name='weekday' value="<?=$weekDayName?>"/>
<input type="hidden" name='icount' value="<?=$i?>"/>
</th>
<?php
for($j=0;$j<8;$j++){
?>
<td>
<span>Set From Time </span><br/>
<div id="<?='d1'.$i.$j?>">
<select id="<?='fhour'.$i.$j?>" name="<?='fhour'.$i.$j?>">
<option value="">HH</option>
<?php
for($time=1;$time<=24;$time++){
?>
<option value="<?=$time?>"><?=$time?></option>
<?php
}
?>
</select>
<!--<input type="text"  placeholder="hh" size="1" maxlength="2" />-->&nbsp;<span>:</span>

<input type="text" id="<?='fminutes'.$i.$j?>" name="<?='fminutes'.$i.$j?>" placeholder="mm" size="2" maxlength="2" />
<!--<select id="<?='thour'.$i.$j?>" name="<?='thour'.$i.$j?>">
<option value="AM">AM</option>
<option value="PM">PM</option>
</select>-->
<br>
<span>Set To Time</span>
<br>
<select id="<?='fhour'.$i.$j?>" name="<?='fhour'.$i.$j?>">
<option value="">HH</option>
<?php
for($time=1;$time<=24;$time++){
?>
<option value="<?=$time?>"><?=$time?></option>
<?php
}
?>
</select>
<!--<input type="text"  placeholder="hh" size="1" maxlength="2" />-->&nbsp;<span>:</span>
<input type="text" id="<?='tminutes'.$i.$j?>" name="<?='tminutes'.$i.$j?>" placeholder="mm" size="2" maxlength="2" />
<!--<select id="<?='tperiod'.$i.$j?>" name="<?='tperiod'.$i.$j?>">
<option value="AM">AM</option>
<option value="PM">PM</option>
</select>-->
<br/><br/>
<select name="<?='options'.$j?>" id="<?='options'.$j?>">
<option value="">Select option</option>
<option value="Preferred">Preferred</option>
<option value="Unavailable">Unavailable</option>
</select>&nbsp;&nbsp;&nbsp;
</div>
<div id="<?='d2'.$i.$j?>">

</div>
</td>

<?php
}
?>
<td>
<button onclick="fill the form" id="<?='but'.$i?>">Set</button>
</td>
</tr>
</form>
<?php
}
}
}
?>
</table>
</body>
</html>