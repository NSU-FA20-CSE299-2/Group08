<?php
require 'connection.php';
if(isset($_POST['user_id'])&&isset($_POST['package_id'])&&isset($_POST['amount'])&&isset($_POST['payment_date'])){
$user_id=$_POST['user_id'];
$package_id= $_POST['package_id'];
$amount= $_POST['amount'];
$payment_date= $_POST['payment_date'];
$date= new DateTime("$payment_date");
date_add($date,date_interval_create_from_date_string("$package_id days"));
$activated_till=$date->format('Y-m-d'); //formatting is important

$sql="insert into user_payment(user_id,package_id,payment_date,activated_till,amount) values('$user_id','$package_id','$payment_date','$activated_till','$amount')";

$insert_data=mysqli_query($conn,$sql);
if($insert_data)
{
  echo "success";

}

else {
  echo "in loop error: ".mysqli_error($conn);
}
}

else if (isset($_POST['user_id'])) {
  $quick_id=$_POST['user_id'];
  $check=mysqli_query($conn,"select *from user_payment where user_id=$quick_id order by activated_till desc");
  if(mysqli_num_rows($check)>0)
  {
    echo  '
<head>
<link rel="stylesheet" href="css/admindesign.css">
</head>
    <table>
    <tr> <th> Payment ID </th>
            <th> User ID</th>
            <th> Package ID </th>
            <th> Payment Date</th>
            <th> Activated Till </th>
            <th> Amount </th>
            <th> Current Status </th>
    </tr>';
    while($row=mysqli_fetch_assoc($check))
    {
    echo '<tr>
            <td>'.$row['payment_id'].'</td>
            <td>'.$row['user_id'].'</td>
            <td>'.$row['package_id'].'</td>
            <td>'.$row['payment_date'].'</td>
              <td>'.$row['activated_till'].'</td>
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
  }
