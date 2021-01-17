<?php //for user
require 'connection.php';
$user_id=$_GET['id'];
//echo $user_id;
$get1=mysqli_query($conn,"select * from body_measurement where user_id=$user_id order by measurement_date desc limit 1");
if(mysqli_num_rows($get1)>0)
{
    $row1=mysqli_fetch_assoc($get1);
    $age1=$row1['age'];
    $height1=$row1['height_m'];
    $weight1=$row1['weight_kg'];
    $bmi1=$row1['bmi'];
    $body_fat1=$row1['body_fat_percent'];
    $lean_mass1=$row1['lean_mass_kg'];
    $mdate1=$row1['measurement_date'];
    $status1=$row1['body_status'];
    $get2=mysqli_query($conn,"select * from body_measurement where user_id=$user_id order by measurement_date desc limit 1,1");
    if(mysqli_num_rows($get2)>0)
    {
      $row2=mysqli_fetch_assoc($get2);
      $age2=$row2['age'];
      $height2=$row2['height_m'];
      $weight2=$row2['weight_kg'];
      $bmi2=$row2['bmi'];
      $body_fat2=$row2['body_fat_percent'];
      $lean_mass2=$row2['lean_mass_kg'];
      $mdate2=$row2['measurement_date'];
      $status2=$row2['body_status'];

      //compare
      $weightchange=$weight1-$weight2;
      $bmichange=$bmi1-$bmi2;
      $heightchange=$height1-$height2;
      $bfc=$body_fat1-$body_fat2;
      $lmc=$lean_mass1-$lean_mass2;
      ?>
      <html>
