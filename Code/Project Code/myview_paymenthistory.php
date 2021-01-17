<?php
require 'connection.php';
$user_id=$_GET['id'];
$get=mysqli_query($conn,"select a.payment_id,a.payment_date,a.activated_till,b.package_name,a.amount from user_payment a INNER join membership_packages b on a.package_id=b.package_id where user_id=$user_id");
echo  '
<head><title>Payment History</title>
<link rel="stylesheet" href="css/design.css">
</head><body><table>
  <tr> <th> Payment ID</th>
          <th> Paid on</th>
          <th> Active Till</th>
          <th> Package Type </th>
          <th> Amount</th>
          <th>Current Status</th>

  </tr>';
  
