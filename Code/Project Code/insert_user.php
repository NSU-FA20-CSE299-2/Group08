<?php
require 'connection.php';
if(isset($_POST['user_id'])&&isset($_POST['user_name'])&&isset($_POST['user_email'])&&isset($_POST['user_phone'])&&isset($_POST['instructor_id'])&&isset($_POST['join_date'])&&isset($_POST['package_id'])){
$user_id=$_POST['user_id'];
$user_name=$_POST['user_name'];
$instructor_id=$_POST['instructor_id'];
$user_email=$_POST['user_email'];
$user_phone=$_POST['user_phone'];
$user_address=$_POST['user_address'];
$user_age=$_POST['user_age'];
$user_gender=$_POST['user_gender'];
$join_date=$_POST['join_date'];
$package_id=$_POST['package_id'];
$user_password=$_POST['user_password'];
$user_type=$_POST['user_type'];
