<?php
require 'connection.php';
$admin_id=$_GET['id'];
$admin_name=$_POST['admin_name'];
$admin_password=$_POST['admin_password'];
$up=mysqli_query($conn,"update admin set admin_name='$admin_name',admin_password='$admin_password' where admin_id='$admin_id'");
if($up)
{
  echo '
  <script>
  alert("Updated Successfully");
  window.location.href="admin_index.php?id='.$admin_id.'";
  </script>';
}
