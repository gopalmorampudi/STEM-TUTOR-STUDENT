<?php
session_start();
include "DBConnection.php";
$h=$_REQUEST['hcount'];

 $tutor_id=$_SESSION['tutor_id'];
 for($i=0;$i<=$h;$i++){
 $course=$_REQUEST['course'.$i];
  $expe=$_REQUEST['expe'.$i];
  
  $query="insert into courses_experience(tutor_id,course_id,expertize) values($tutor_id,$course,'$expe')";

$result=mysql_query($query);
 }
 //if($result){
	header("Location: tutor_profile.php");
//}else{
	//header("Location: tutor_profile.php?failed");		
//} 
?>