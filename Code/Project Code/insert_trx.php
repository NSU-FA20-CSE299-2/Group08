<html>
<head>
<title> Transactions View </title>
<link rel="stylesheet" href="css/admindesign.css">
</head>
<body>
<?php
require 'connection.php';
if(isset($_POST['month']))
{
  $month =$_POST['month'];
  $monthnew=date("m",strtotime($month));

  $sql="SELECT (SELECT sum(amount)from user_payment where payment_date like '_____$monthnew%')as income,(SELECT sum(trainer_salary)from trainer)as trainer_fees"; //fetching salary from user_info and trainer table
$getd=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($getd);
$income=$row['income'];
$salary_paid=$row['trainer_fees'];
//new query to get values from other bills table
$sqlob="select * from other_bills where payment_date like '_____$monthnew%' ";
$getob=mysqli_query($conn,$sqlob);
$rowob=mysqli_fetch_assoc($getob);
if(mysqli_num_rows($getob)>0){
$elec_bill=$rowob['elec_bills'];
$machine_maint=$rowob['machine_maint'];
$other_bill=$rowob['other_bill'];
/*echo $elec_bill."<br/>";
echo $machine_maint."<br/>";
echo $other_bill."<br/>";*/}
else{
  echo "no bills record <br/>";
  $elec_bill=0;
  $machine_maint=0;
  $other_bill=0;
