<?php
session_start();
include("dbconnection.php");
$action=$_REQUEST['action'];

if($action=='tutor_login'){

$username=$_REQUEST['username'];

$password=($_REQUEST['password']);

$checkquery="SELECT * from tutor where emailid='$username' && password='$password'&& status='Accept'";
$checkresults=mysql_query($checkquery);
if($res=mysql_fetch_array($checkresults)){
if(!empty($_REQUEST['username']))
{
unset($_SESSION['tutor_email']);
}
$_SESSION['tutor_name']=$res['tutor_name'];
$_SESSION['tutor_email']=$_REQUEST['username'];
$_SESSION['tutor_id']=$res[0];

//echo "sucess";
header('Location: tutor_profile.php?log=sucess');
}else{
header('Location: login.html?log=fail');
//echo "failure";
}
}

if($action=='student_login'){
//echo $action;
 $username=$_REQUEST['username'];

 $password=$_REQUEST['password'];
//echo '<br>';
 $checkquery="SELECT * from student where emailid='$username' && password='$password' && status='Accept'";
$checkresults=mysql_query($checkquery);
if($res=mysql_fetch_array($checkresults)){
if(!empty($_REQUEST['username']))
{
unset($_SESSION['student_email']);
}
$_SESSION['student_email']=$_REQUEST['username'];
 $_SESSION['student_id']=$res[0];
 $_SESSION['dept']=$res[7];
//echo "sucess";
header('Location: student_profile.php?log=sucess');
}else{
header('Location: login_student.html?log=fail');
//echo "failure";
}
}


?>