<?php
require 'connection.php';
if(isset($_POST['user_id'])&&isset($_POST['meal_time'])&&isset($_POST['food_a'])&&isset($_POST['food_b'])&&isset($_POST['food_c']))
{
$user_id=$_POST['user_id'];
$meal_time=$_POST['meal_time'];
$food_a=$_POST['food_a'];
$food_b=$_POST['food_b'];
$food_c=$_POST['food_c'];
$food_d=$_POST['food_d'];
$food_e=$_POST['food_e'];

$food_d=!empty($food_d) ? "'$food_d'" : "NULL";
$food_e=!empty($food_e) ? "'$food_e'" : "NULL";
//^how to send null from php to mysql
