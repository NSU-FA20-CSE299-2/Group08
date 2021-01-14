<?php
require 'connection.php';
$admin_id=$_GET['id'];
$get=mysqli_query($conn,"select * from admin where admin_id=$admin_id");
$row=mysqli_fetch_assoc($get);
echo '
<head>
  <title>Edit Admin
  </title>
<link rel="stylesheet" href="css/admindesign.css">
<style>
body{
  font-size: 200%;
}
</style>
</head>
<body style="text-align:left">
<!---->

    <form style="line-height:4 " action="update_adminprofile.php?id='.$row['admin_id'].'" method="post">
    <label>Name:<input name="admin_name" type="text" value="'.$row['admin_name'].'" required></label><br/>
    <label>Password:<input name="admin_password" type="password" value="'.$row['admin_password'].'" required></label><br/>
    <button type="submit" name="submit">Submit</button></form>
     '
     ;


 ?>
