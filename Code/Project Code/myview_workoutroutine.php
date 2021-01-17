<?php
require 'connection.php';
$user_id=$_GET['id'];
//echo $user_id;
$get=mysqli_query($conn,"select * from total_userroutine where user_id=$user_id");
if(mysqli_num_rows($get)>0){
echo  '
<head>
<link rel="stylesheet" href="css/design.css">
</head>
<title>Workout Routine</title>
<body>
