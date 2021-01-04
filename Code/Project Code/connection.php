<?php
$db_server="localhost";
$db_user="root";
$db_password="";
$db_name="project_prac1";
$conn=mysqli_connect($db_server,$db_user,$db_password,$db_name);
if(!$conn){
  die("connection failed: ".mysqli_connect_error());
}

 ?>
