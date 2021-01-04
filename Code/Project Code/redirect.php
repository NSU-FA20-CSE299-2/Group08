<?php
require 'connection.php';
if(isset($_POST['login']))
{
$id=$_POST['id'];//id from login page doesnt matter admins or user's
$password=$_POST['password'];
$type=$_POST['type'];
echo"From html: " .$id ;
echo $password;
 echo $type;
 if($type=='user'){
$sql="select * from user_info where user_id='$id' and user_password='$password' and user_type='$type' ";
$get=mysqli_query($conn,$sql);
if($get)
{
     $row=mysqli_fetch_assoc($get);
     echo $row['user_name'];// inside user_info table now
     echo $row['user_password'];
     echo $row['user_type'];
    if(($id==$row['user_id'])&&($password==$row['user_password']&&($type==$row['user_type'])))
    {
      echo '<script>alert("Welcome User!");
      window.location.href="user_index.php?id='.$row['user_id'].'";
      </script>';
    }
    else {
      echo '<script>alert("Sorry! wrong user id or password");
      window.location.href="userlogin.php";
      </script>';//'<script>alert("doesnt match");</script>';
    }} 
