<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admindesign.css">

    <title>View Users</title>
    <style>
    table{
      width: 97%;
    }
    </style>
  </head>
  <body>
    <header>
    <h1>User Data</h1>
<?php
require 'connection.php';
$sql="SELECT a.user_id,a.user_name,b.trainer_name,a.user_email,a.user_phone,a.user_address,a.user_age,a.user_gender,a.join_date,c.package_name from user_info a INNER JOIN trainer b ON a.instructor_id=b.trainer_id INNER JOIN membership_packages c ON a.package_id=c.package_id";
$view=mysqli_query($conn,$sql);
