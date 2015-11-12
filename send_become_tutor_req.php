<?php
session_start();
include "DBConnection.php";
 $student_id=$_SESSION['student_id'];
 $subjectArray=$_REQUEST['subject'];
 $subjectList=implode(',',$subject);
//foreach($subjectArray as $subList) $subjectList.=$subList.',';
$phone_number=$_REQUEST['phone_number'];
$desp=$_REQUEST['desp'];

echo $query="insert into student_to_tutor(student_id,courses_list,phone_number,desp) values($student_id,'$subjectList',$phone_number,'$desp')";

$result=mysql_query($query);
 if($result){
	 
	header("Location: become_tutor_req.php?success");
}else{
	header("Location: become_tutor_req.php?failed");
} 
?>