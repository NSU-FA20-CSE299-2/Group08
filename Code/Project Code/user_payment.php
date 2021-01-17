<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Payment </title>
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
	select{
		padding: 7px;
	}
	</style>
</head>
<body style="margin: 5%">
 <h1> User Payment </h1>
 <form action="insert_user_payment.php" method="post">
  <label>User ID: <input name="user_id" required></label><br/>
  Package ID: <select name="package_id">
  <option value="7"  selected>Weekly</option><br/>
  <option value="30" >Monthly</option><br/>
  <option value="180" >Half-Yearly</option><br/>
  <option value="365" >Yearly</option><br/>
</select><br/>
  <label>Amount: <input name="amount" required></label><br/>
    <label> Payment Date: <input type="date" name="payment_date" required></label><br/>

 <button type="submit" name="submit">Submit</button><br/>
</form>
</body>
</html>
