<?php
require 'connection.php';
$admin_id=$_GET['id'];
if(isset($_POST['elec_bill'])&&isset($_POST['payment_date']))
{
	$payment_date=$_POST['payment_date'];
	 $elec_bill=$_POST['elec_bill'];
	 $machine_maint=$_POST['machine_maint'];
	 $other_bill=$_POST['other_bill'];
	$insert =mysqli_query($conn,
	"Insert into other_bills(payment_date,elec_bills,machine_maint,other_bill) values('$payment_date','$elec_bill','$machine_maint','$other_bill')
  ON DUPLICATE KEY UPDATE
	elec_bills='$elec_bill',
	machine_maint='$machine_maint',
	other_bill='$other_bill'
	  ");
		if($insert)
		{
			echo '
			<script>
			alert("inserted Successfully");
			window.location.href="admin_index.php?id='.$admin_id.' ";
		</script>';

		}
		else
		{
			echo "in loop error: ".mysqli_error($conn);
		}



}
else {
	echo '<script>alert("Could not insert");</script>';
}



 ?>
