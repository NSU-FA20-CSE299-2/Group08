<?php
require 'connection.php';
$admin_id=$_GET['id'];
$get=mysqli_query($conn,"select * from admin where admin_id=$admin_id");
$row=mysqli_fetch_assoc($get);

 echo '




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admindesign.css">

<!---->
    <title>Hello, world!</title>
  </head>
  <body>
    <header>
    <h1>Welcome Admin</h1>
    <nav>
    <a href="user_payment.php">Take Payment</a>
    <a href="view_paymentstatus.php">
