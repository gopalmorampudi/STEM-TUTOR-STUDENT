<?php
session_start();
include "DBConnection.php";
 $student_id=$_SESSION['student_id'];
 $id=$_REQUEST['id'];
$tid=$_REQUEST['tid'];
$tName=$_REQUEST['tName'];
$sid=$_REQUEST['sid'];
$sName=$_REQUEST['sName'];
$date=$_REQUEST['dateSelected'];
$time=$_REQUEST['time'];
$timeArray=explode("-",$time);
$timeInHour=explode(":",$timeArray[0]);
$timeInMinutes=explode(":",$timeArray[1]);
$purpose=$_REQUEST['purpose'];


  $query="insert into appointments(instructor_id,student_id,course_code,a_date,from_hour,to_hour,from_min,to_min,purpose,row_id) values($tid,$student_id,$sid,'$date',$timeInHour[0],$timeInHour[1],$timeInMinutes[0],$timeInMinutes[1],'$purpose',$id)";

$result=mysql_query($query);
 if($result){
	echo "Your appointment request has sent to admin... Thank you";
}else{
	echo "Due to some problems we are unable to send the appointment request.... Try later";
} 
?>