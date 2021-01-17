<?php
require 'connection.php';
$admin_id=$_GET['id'];
echo '
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pay Other Bills </title>
	<link rel="stylesheet" href="css/admindesign.css">
	<style>
	body{
		font-size:120%;
	}
	form{
		line-height:3;
	}
	input{
		padding: 7px;
	}
	button{
		height:35px;
	}
	</style>
</head>
<body style="margin:5%">
 <h1> Pay Other Bills </h1>
 <form  action="edit_paybills.php?id='.$admin_id.'" method="post">

<label>Month: <input type="month" name="payment_date"><br/>
  <label>Electricity Bill<input name="elec_bill"  required></label><br/>
	<label>Machine Maintenance<input name="machine_maint" value="0"></label><br/>
  <label>Other Bills<input name="other_bill" value="0"></label><br/>
 <button type="submit" name="submit">Submit</button><br/>
</form>
</body>
</html>'
?>
