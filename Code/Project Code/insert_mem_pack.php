<?php
require 'connection.php';
if(isset($_POST['package_id'])&&isset($_POST['package_amount'])&&isset($_POST['package_name'])){
$package_id=$_POST['package_id'];
$package_amount=$_POST['package_amount'];
$package_name=$_POST['package_name'];
$sql="insert into membership_packages(package_id,package_amount,package_name) values('$package_id','$package_amount','$package_name')";
$insert_data=mysqli_query($conn,$sql);
if($insert_data)
{
  echo "inserted successfully";
}
else{ echo "oops! check the values properly";}
}
else{
  echo "nothing entered";
}
 ?>
