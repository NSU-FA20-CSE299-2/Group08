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
if(mysqli_num_rows($view)>0)
{
  echo  '<table>
    <tr> <th> User ID </th>
            <th> Name</th>
            <th> Instructor Name </th>
            <th>Email</th>
            <th> Phone</th>
            <th> Address </th>
            <th> Age </th>
            <th>Gender</th>
            <th>Join Date</th>
            <th>Package Type</th>
    </tr>';
while($row=mysqli_fetch_assoc($view))
{
echo '<tr>
        <td>'.$row['user_id'].'</td>
        <td>'.$row['user_name'].'</td>
        <td>'.$row['trainer_name'].'</td>
        <td>'.$row['user_email'].'</td>
        <td>'.$row['user_phone'].'</td>
        <td>'.$row['user_address'].'</td>
        <td>'.$row['user_age'].'</td>
        <td>'.$row['user_gender'].'</td>
        <td>'.$row['join_date'].'</td>
        <td>'.$row['package_name'].'</td></tr>';



}



}
else {
  echo "nothing found";
}



 ?>
  </body>
</html>
