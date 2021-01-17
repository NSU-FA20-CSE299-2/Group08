<?php
require 'connection.php';
$user_id=$_GET['id'];
$sql="SELECT a.user_id,a.user_name,a.user_password,b.trainer_name,a.user_email,a.user_phone,a.user_address,a.user_age,a.user_gender,a.join_date,a.package_id from user_info as a,trainer as b where user_id='$user_id' and
 a.instructor_id=b.trainer_id";
$get=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($get);


echo  '
<head>
<link rel="stylesheet" href="css/design.css">
</head>
<title>Profile</title>
<body>
<table>
  <tr> <th>Fields </th>
          <th>Values </th>

  </tr>
   <tr><td>Id: </td>
        <td>'.$row['user_id'].'</td></tr>
        <tr><td>Name: </td>
             <td>'.$row['user_name'].'</td></tr>
             <tr><td>Password: </td>
                  <td>'.$row['user_password'].'</td></tr>
                  <tr><td>Trainer : </td>
             <td>'.$row['trainer_name'].'</td></tr>
         <tr><td>Email: </td>
        <td>'.$row['user_email'].'</td></tr>
            <tr><td>Phone: </td>
           <td>'.$row['user_phone'].'</td></tr>
       <tr><td>Address: </td>
            <td>'.$row['user_address'].'</td></tr>
      <tr><td>Age: </td>
     <td>'.$row['user_age'].'</td></tr><td>Gender: </td>
  <td>'.$row['user_gender'].'</td></tr>
    <tr><td>Joined on: </td>
    <td>'.$row['join_date'].'</td></tr>
               <tr><td>Package ID: </td>
  <td>'.$row['package_id'].'</td></tr></table>';


echo '
<div id="editdiv"><a id="edit" href="edit_userprofile.php?id='.$row['user_id'].'">EDIT</a></div></body>'; ?>
