<?php
require 'connection.php';
if(isset($_POST['user_id'])&&isset($_POST['feet'])&&isset($_POST['kg'])){
$user_id=$_POST['user_id'];
$feet=$_POST['feet'];
$inches=$_POST['inches'];
$kg=$_POST['kg'];
$gm=$_POST['gm'];
$meas_date=$_POST['meas_date'];
$height=($feet*0.3048)+($inches*0.0254);
$weight=$kg+($gm/1000);
$bmi=$weight/($height*$height);
$bmi= round($bmi,2);
//echo $bmi;
$sql1="select user_age,user_gender from user_info where user_id=".$user_id;
$get_sql1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($get_sql1);
$user_age=$row1['user_age'];
$user_gender=$row1['user_gender'];
if($user_gender=='Male'){
$body_fat=(1.20*$bmi)+(0.23*$user_age)-5.4;}
else {
  $body_fat=(1.2*$bmi)+(0.23*$user_age)-16.2;
}
$lean_bm=$weight-($weight*($body_fat/100));
//insert body status based on bmi
