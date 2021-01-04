<?php
require 'connection.php';
$user_id=$_GET['id'];
$sql =" select * from user_info where user_id='$user_id'";
$get=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($get);?>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" href="css/design.css">
</head>
<body id="userindex">
   <h1 id="welcome">Welcome <?php echo $row['user_name']; ?></h1>
      <?php
       echo '<div id="WR" class="UI">
      <a href="myview_workoutroutine.php?id='.$row['user_id'].'">Workout Routine</a></div>
      <div id="DC" class="UI">
        <a href="myview_dietchart.php?id='.$row['user_id'].'">Diet Chart</a></div>
        <div id="PH" class="UI">
        <a href="myview_paymenthistory.php?id='.$row['user_id'].'">Payment History</a></div>
        <div id="AS" class="UI">
        <a href="myview_assessment.php?id='.$row['user_id'].'">Assessment</a></div>
       <div id="VP" class="UI">
        <a href="myview_userprofile.php?id='.$row['user_id'].'">View Profile</a></div>
        <div id="logout" class="UI">
        <a href="userlogin.php">Logout</a></div>
    '; ?>







</body>
</html>
