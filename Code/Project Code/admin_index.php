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

        <form action="insert_trx.php?id='.$row['admin_id'].'" method="post">
       <label>Check Monthly Transactions: <input type="month" name="month" required><button type="submit" name="submit">View</button></form>



        <form action="insert_user_payment.php" method="post">
        <label>Check Quick Payment  Status: <input name="user_id" placeholder="Enter user id.." required></label><button type="submit" name="submit">Submit</button></form>


<a id="adminlogout" href="userlogin.php">Logout</a> </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>'
?>
