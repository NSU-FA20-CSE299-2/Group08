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
    All Payment Records</a>
      <a href="pay_otherbill.php?id='.$row['admin_id'].'"> Pay other bills</a>
      <a href="edit_admin.php?id='.$row['admin_id'].'">EDIT admin</a><nav></header>

      <aside class="left">

        <a href="user_reg.php">Add User</a>
        <a href="trainer.php">Add trainer</a>
        <a href="membership_packages.php"> Packages</a>
        <a href="measurement.php">Take Body Measurement</a>
        </aside>
        <main class="right">
        <div>
        <a href="totaluser_dietchart.php">Set Diet Chart</a></div>
        <div><a href="total_userroutine.php">Set Routine</a></div>
        <div><a href="viewall_bodymeasurement.php">User Body Status</a></div>
        <div><a href="viewall_userinfo.php">View All User Data</a></div></main>



      <footer>
      
