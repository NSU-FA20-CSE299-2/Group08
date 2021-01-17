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
while($row=mysqli_fetch_assoc($get))
{

    echo '<tr>
            <td>'.$row['payment_id'].'</td>
            <td>'.$row['payment_date'].'</td>
            <td>'.$row['activated_till'].'</td>
            <td>'.$row['package_name'].'</td>
              <td>'.$row['amount'].'</td>';
              $current_date=date('Y-m-d');
              $activated_till=$row['activated_till'];
              $diff=date_diff(date_create($current_date),date_create($activated_till));
              $diff=$diff->format("%R%a");
              $number=(int)$diff;
              if($number>0)
              {
               echo '<td class="tdpaid">ACTIVE</td></tr>';
              }
              else {
               echo '<td class="tdunpaid">EXPIRED</td></tr>';
              }

}
 ?>
