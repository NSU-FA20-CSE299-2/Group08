<?php
require 'connection.php';
if(isset($_POST['user_id'])&&isset($_POST['routine_day'])&&isset($_POST['exc_name_1'])&&isset($_POST['exc_name_2'])&&isset($_POST['exc_name_3'])&&isset($_POST['sets'])&&isset($_POST['reps']))
{
  $user_id = $_POST['user_id'];
  $routine_day = $_POST['routine_day'];
  $exc_name_1 = $_POST['exc_name_1'];
  $exc_name_2 = $_POST['exc_name_2'];
  $exc_name_3 = $_POST['exc_name_3'];
  $exc_name_4= $_POST['exc_name_4'];
  $exc_name_5 = $_POST['exc_name_5'];
  $sets=$_POST['sets'];
  $reps=$_POST['reps'];
  $exc_name_4=!empty($exc_name_4)?"'$exc_name_4'" : "NULL";
  $exc_name_5=!empty($exc_name_5)?"'$exc_name_5'" : "NULL";
  $sql="insert into total_userroutine(user_id,routine_day,exc_name_1,exc_name_2,exc_name_3,exc_name_4,exc_name_5,sets,reps) values('$user_id','$routine_day','$exc_name_1','$exc_name_2','$exc_name_3',$exc_name_4,$exc_name_5,'$sets','$reps')
  ON DUPLICATE KEY UPDATE
  exc_name_1='$exc_name_1',
exc_name_2='$exc_name_2',
exc_name_3='$exc_name_3',
exc_name_4=$exc_name_4,
exc_name_5=$exc_name_5,
sets='$sets',
reps='$reps'  ";
  $insert_all_routine=mysqli_query($conn,$sql);
  if($insert_all_routine)
  {
    echo "success";
  }
  else {
    echo "error in loop: ".mysqli_error($conn);
  }
}
else
{
  echo "failed to insert";
}
 ?>
