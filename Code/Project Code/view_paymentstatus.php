<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/admindesign.css">
<style>
td:nth-child(2){
  background-color:rgba(26, 82, 118,.3);


}
</style>

    <title>View Records</title>
  </head>
  <body>
    <header>
    <h1>All Payment Records</h1>
<?php
require 'connection.php';
$view=mysqli_query($conn,"select * from user_payment");
if(mysqli_num_rows($view)>0)
{
  echo  '<table>
    <tr> <th> Payment ID </th>
            <th> User ID</th>
            <th> Package ID </th>
            <th> Payment Date</th>
            <th> Activated Till </th>
            <th> Amount </th>
            <th> Current Status </th>
    </tr>';
while($row=mysqli_fetch_assoc($view))
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



 ?>
  </body>
</html>
