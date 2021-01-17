<?php
require 'connection.php';
$user_id=$_GET['id'];
//echo $user_id;
$get=mysqli_query($conn,"select * from total_userroutine where user_id=$user_id");
if(mysqli_num_rows($get)>0){
echo  '
<head>
<link rel="stylesheet" href="css/design.css">
</head>
<title>Workout Routine</title>
<body>


<table>
  <tr> <th> Day </th>
          <th> Exercise 1</th>
          <th> Exercise 2 </th>
          <th> Exercise 3</th>
          <th> Exercise 4</th>
          <th> Exercise 5 </th>
          <th> Sets </th>
          <th> Reps </th>
  </tr>';
while($row=mysqli_fetch_assoc($get))
{

    echo '<tr>
            <td>'.$row['routine_day'].'</td>
            <td>'.$row['exc_name_1'].'</td>
            <td>'.$row['exc_name_2'].'</td>
            <td>'.$row['exc_name_3'].'</td>
              <td>'.$row['exc_name_4'].'</td>
                <td>'.$row['exc_name_5'].'</td>
                <td>'.$row['sets'].'</td>
                <td>'.$row['reps'].'</td>';
}}
else
{
  echo "no routine has been assigned yet";
}


 ?>
