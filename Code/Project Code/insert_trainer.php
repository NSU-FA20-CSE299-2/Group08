<?php
require 'connection.php';
if(isset($_POST['trainer_id'])&&isset($_POST['trainer_name'])&&isset($_POST['trainer_email'])&&isset($_POST['trainer_phone'])&&isset($_POST['trainer_salary'])){
  $trainer_id=$_POST['trainer_id'];
  $trainer_name=$_POST['trainer_name'];
  $trainer_email=$_POST['trainer_email'];
  $trainer_phone=$_POST['trainer_phone'];
  $trainer_address=$_POST['trainer_address'];
  $trainer_gender=$_POST['trainer_gender'];
  $trainer_salary=$_POST['trainer_salary'];
  $hire_date=$_POST['hire_date'];
  $sql="insert into trainer(trainer_id,trainer_name,trainer_email,trainer_phone,trainer_address,trainer_gender,trainer_salary,hire_date) values('$trainer_id','$trainer_name','$trainer_email','$trainer_phone','$trainer_address','$trainer_gender','$trainer_salary','$hire_date')";
  $insert_trainer_data=mysqli_query($conn,$sql);
  if($insert_trainer_data)
  {
    echo "Trainer Data inserted";
  }
  else{
    echo "Data Value contradicts";
  }
}
else {
  echo "Data insertion FAILED";
}

 ?>
