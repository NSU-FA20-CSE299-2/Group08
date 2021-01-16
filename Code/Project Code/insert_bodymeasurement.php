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
if($bmi<18.5)
  {
     $status="Underweight";
  }
  else if(($bmi>=18.50)&&($bmi<=24.99))
  {
      $status="Good";
  }
  else if(($bmi>=25.00)&&($bmi<=29.99))
  {
      $status="Overweight";
  }
  else if($bmi>=30.00)
  {
      $status="Obese";
  }
  else {$status="N/A";}
/*echo "bmi: ".$bmi;
echo "body fat%: ".$body_fat;
echo "lean mass kg: ".$lean_bm;
echo "    height ".$height;
echo "   status ".$status;*/
$ssql2="insert into body_measurement(user_id,age,gender,height_m,weight_kg,bmi,body_fat_percent,lean_mass_kg,measurement_date,body_status) values('$user_id','$user_age','$user_gender','$height','$weight','$bmi','$body_fat','$lean_bm','$meas_date','$status')
ON DUPLICATE KEY UPDATE
height_m='$height',weight_kg='$weight',bmi='$bmi',body_fat_percent='$body_fat',lean_mass_kg='$lean_bm',body_status='$status' ";
$get_sql2=mysqli_query($conn,$ssql2);

}
else {
  echo "contradicts ";
}





 ?>
