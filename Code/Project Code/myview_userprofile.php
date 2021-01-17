<?php
require 'connection.php';
$user_id=$_GET['id'];
$sql="SELECT a.user_id,a.user_name,a.user_password,b.trainer_name,a.user_email,a.user_phone,a.user_address,a.user_age,a.user_gender,a.join_date,a.package_id from user_info as a,trainer as b where user_id='$user_id' and
 a.instructor_id=b.trainer_id";
$get=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($get);


echo  '
<head>
<link rel="stylesheet" href="css/design.css">
</head>
<title>Profile</title>
<body>
<table>
  <tr> <th>Fields </th>
          <th>Values </th>
          
