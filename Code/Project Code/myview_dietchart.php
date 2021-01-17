<?php
require 'connection.php';
$user_id=$_GET['id'];
$get=mysqli_query($conn,"select * from totaluser_dietchart where user_id=$user_id");
echo  '
<head>
  <title>Diet Chart</title>
  <link rel="stylesheet" href="css/design.css">
</head><body>


<table>
  <tr> <th> Meal Time</th>
          <th> Food A</th>
          <th>  Food B</th>
          <th> Food C</th>
          <th> Food D</th>
          <th> Food E</th>
  </tr>';
while($row=mysqli_fetch_assoc($get))
{

    echo '<tr>
            <td>'.$row['meal_time'].'</td>
            <td>'.$row['food_a'].'</td>
            <td>'.$row['food_b'].'</td>
            <td>'.$row['food_c'].'</td>
              <td>'.$row['food_d'].'</td>
                <td>'.$row['food_e'].'</td>
                   ';
}
 ?>
