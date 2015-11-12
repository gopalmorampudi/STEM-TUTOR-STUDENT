<?php
 session_start();
include "DBConnection.php";
 $weekDayArray = array("Sunday"=>"0","Monday"=>"1", "Tuesday"=>"2", "Wednesday"=>"3","Thursday"=>"4","Friday"=>"5","Saturday"=>"6");
$user=$_REQUEST['id'];
 $sid=$_REQUEST['sid'];
$date;
$weekDay;
$weekDayCount;
 $dateCounter=0;
$gArray;
 $cArray;
 if(isset($_REQUEST['date'])){
	 $getdate=$_REQUEST['date'];
 $gArray=explode('-',$getdate);
 $currdate=date('Y-m-d', mktime(0, 0, 0, date('m'), date('d'), date('Y')));
 $cArray=explode('-',$currdate);
 if($gArray[2]>$cArray[2]){ $cc=$gArray[2]-$cArray[2];
  $date=date('Y-m-d l', mktime(0, 0, 0, date('m'), date('d') +$cc, date('Y')));
  $weekDay=date('l', mktime(0, 0, 0, date('m'), date('d') +$cc, date('Y')));
  $weekDayCount=$weekDayArray[$weekDay];
 }
 else if($gArray[2]<$cArray[2]){ $cc=$cArray[2]-$gArray[2];
 $date=date('Y-m-d l', mktime(0, 0, 0, date('m'), date('d') -$cc, date('Y')));
 $weekDay=date('l', mktime(0, 0, 0, date('m'), date('d')-$cc, date('Y')));
 $weekDayCount=$weekDayArray[$weekDay];
 }
 else {
	 $cc=0;
	 $date=date('Y-m-d l', mktime(0, 0, 0, date('m'), date('d') , date('Y')));
 $weekDay=date('l', mktime(0, 0, 0, date('m'), date('d'), date('Y')));
 $weekDayCount=$weekDayArray[$weekDay];
 }
 //echo $date;
 //echo $weekDay;
 //echo $weekDayCount;
 $copyOf_cc=$cc;
  ?>
 <table border>
 <?php
  if($gArray[2]<$cArray[2]){
 for($i=$weekDayCount;$i>=1;$i--){
	 echo $copyOf_cc;
	 $date1=date('Y-m-d l', mktime(0, 0, 0, date('m'), date('d') -$copyOf_cc, date('Y')));
	 ?>
	 <tr>
	 <td>
	 <?php
	 echo $date1;
	 $copyOf_cc--;
	 ?>
	 </td>
	 </tr>
	 <?php
 }
  }

	
 /* for($j=){
	 $date1=date('Y-m-d l', mktime(0, 0, 0, date('m'), date('d') +$copyOf_cc, date('Y')));
 } */

 
 
 
 
 
 
 
 ?>
</table>
<?php
 
 //echo $weekDayCount=date('N', strtotime($date));
	 
 }else{
 $date=date('Y-m-d l', mktime(0, 0, 0, date('m'), date('d'), date('Y')));
 $weekDay=date('l', mktime(0, 0, 0, date('m'), date('d'), date('Y')));
 $weekDayCount=$weekDayArray[$weekDay];

 ?>
 <table border>
 <?php
 for($i=$weekDayCount;$i>=1;$i--){
	 $date1=date('Y-m-d l', mktime(0, 0, 0, date('m'), date('d') - $i , date('Y')));
$array1=array();
//$array2=array();
$date2=date('Y-m-d', mktime(0, 0, 0, date('m'), date('d') - $i , date('Y')));
$sql="select * from tutor_schedule2 tr where tr.tutor_id=$user and tr.date_day='$date2' order by tr.fhours;";
$result=  mysql_query($sql);
while($res=mysql_fetch_row($result)){
	$record=array();	
	array_push($record,$res[0]);
	array_push($record,$res[1]);
	array_push($record,$res[2]);
	array_push($record,$res[3]);
	array_push($record,$res[4]);
	array_push($record,$res[5]);
	array_push($record,$res[6]);
	array_push($record,$res[7]);
	array_push($record,$res[8]);
	array_push($array1,$record);
}

 $c=count($array1);
	 
	// if(!strpos($date1,'Sunday')){
		 if(!strpos($date1,'Saturday')){
			 
			?>
			<tr>
			<td>
			<span><?=$date1?></span>
			</td>
			
			<?php
				//for($k=0;$k<$c;$c++){
					foreach($array1 as $a){
						$timings='';
				if($a[4]<=9) $timings.= '0'.$a[4];
						else $timings.= $a[4];
					$timings.= ":";
					if($a[5]<=9) $timings.= '0'.$a[5];
						else $timings.= $a[5];
						$timings.='-';
				
					if($a[6]<=9) $timings.='0'.$a[6];
						else $timings.= $a[6];
					$timings.= ":";
					if($a[7]<=9) $timings.= '0'.$a[7];
						else $timings.= $a[7];
				?>
				<td style="background:#999">
				<table>
					<tr>
					<td><?=$timings?></td>
					</tr>
					<tr>
					<td colspan="3"><center><?="Status :- ".$a[8]?></center></td>
					</tr>
					</table>
			</td>
					<?php
				}
				for($k=0;$k<8-$c;$c++){
					?>
					<td style="background:#999">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<?php
				}
					?>
			</tr>
			<?php
		//}
	}
}
$count=count($weekDayArray);
$count2=$count-$weekDayCount;
for($i=0;$i<=$count2;$i++){
$dateCounter++;
$date1=date('Y-m-d l', mktime(0, 0, 0, date('m'), date('d') + $i , date('Y')));	 
$array1=array();
$date2=date('Y-m-d', mktime(0, 0, 0, date('m'), date('d') + $i , date('Y')));
$sql="select * from tutor_schedule2 tr where tr.tutor_id=$user and tr.date_day='$date2' order by tr.fhours;";
$result=  mysql_query($sql);
while($res=mysql_fetch_row($result)){
	$record=array();	
	array_push($record,$res[0]);
	array_push($record,$res[1]);
	array_push($record,$res[2]);
	array_push($record,$res[3]);
	array_push($record,$res[4]);
	array_push($record,$res[5]);
	array_push($record,$res[6]);
	array_push($record,$res[7]);
	array_push($record,$res[8]);
	array_push($array1,$record);
}

 $c=count($array1);
	 if(!strpos($date1,'Sunday')){
		// if(!strpos($date1,'Saturday')){
			 ?>
			<tr>
			<td>
			<span><?=$date1?></span>
			</td>		
				<?php
					foreach($array1 as $a){
				 
				$timings='';
				if($a[4]<=9) $timings.= '0'.$a[4];
						else $timings.= $a[4];
					$timings.= ":";
					if($a[5]<=9) $timings.= '0'.$a[5];
						else $timings.= $a[5];
					$timings.='-';
					if($a[6]<=9) $timings.='0'.$a[6];
						else $timings.= $a[6];
					$timings.= ":";
					if($a[7]<=9) $timings.= '0'.$a[7];
						else $timings.= $a[7];

					
				if($a[8]=='Preferred'){
					$student=$_SESSION['student_id'];
				?> 
<td style="background:green;color:white;" onclick="window.open('fix-appointment.php?id=<?=$a[0]?>&date=<?=$a[2]?>&time=<?=$timings?>&student=<?=$student?>&tutor=<?=$user?>&subject=<?=$sid?>','','width=500, height=500');">
<?php 
				}
				else if($a[8]=='class'){
					?>
					<td style="background:blue;color:white;">
					<?php
				}
				else{
						?> 
<td style="background:black;color:black;">
<?php 	
				}
?>
				<table>
					<tr>
					<td>
					<?=$timings?>
					</td>
					</tr>
					<tr>
					<td colspan="3"><center><?="Status :- ".$a[8]?></center></td>
					</tr>
					</table>
			</td>
					<?php
				}
				for($k=0;$k<8-$c;$c++){
					?>
					<td style="background:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<?php
				}
					?>				
			</tr>
			<?php
		// }
	 }
 }
?>
</table>


<br>
<input type="checkbox" name="inconvenient" id="inconvenient" value="inconvenientTime" onchange="disp1(this)">&nbsp;<span>inconvenient timings</span>
<div class="selectDate" style="display:none;" id="selectForm">
	
		<form action="tutor_student_classes.php" method="post">
		<input type="hidden" name="student_id" id="student_id" value="<?=$_SESSION['student_id']?>"><br>
		<input type="hidden" name="selectedSubject" id="selectedSubject" value="<?=$sid?>"><br>
		<span>Select Date :</span><input type="date" name="selectedDate" id="selectedDate">
		<br><br>
		<span>Select your convenient  Time :</span>
		
		<select id="<?='fhour'.$i.$j?>" name="hours">
			<option value="">HH</option>
			<?php
			for($time=1;$time<=24;$time++){
			?>
			<option value="<?=$time?>"><?=$time?></option>
			<?php
			}
			?>
		</select>
		<span>:</span>
		<input type="text" size="3" maxlength="2" name="minutes" placeholder="MM"/>
		
		<br><br><button type="submit" name="action" value="request_submit">Request submit</button>
		</form>
		</div>
<?php 
 }
?>