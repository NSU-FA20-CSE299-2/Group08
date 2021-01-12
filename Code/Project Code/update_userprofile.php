<?php
require 'connection.php';
$user_id=$_GET['id'];


$user_name=$_POST['user_name'];
$user_password=$_POST['user_password'];
$user_email=$_POST['user_email'];
$user_phone=$_POST['user_phone'];
$user_address=$_POST['user_address'];
$user_age=$_POST['user_age'];
$user_gender=$_POST['user_gender'];

echo "address updated: ".$user_address;

$update=mysqli_query($conn," update user_info set user_name='$user_name', user_password='$user_password',user_email='$user_email',user_phone='$user_phone', user_address='$user_address',user_age='$user_age', user_gender='$user_gender' where user_id=$user_id");
if($update)
{ echo '<script>
  alert("Updated Successfully!");
  window.location.href="user_index.php?id='.$user_id.'";
  </script>';

}
else
{
  echo "error: ".mysqli_error($conn);
}

 ?>
