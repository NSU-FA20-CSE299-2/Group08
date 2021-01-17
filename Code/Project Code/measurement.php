<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Body Measurement </title>
	<link rel="stylesheet" href="css/admindesign.css">
	<style>
	body{
		line-height: 1.6;
		font-size: 120%;
	}
	select{
		padding: 6px;
		border-radius: 5px;
		margin-bottom: 2px;

	}
	button{
		height: 35px;
		border-radius: 5px;

	}
	input{
		background-color: rgb(236, 112, 99);

	}
	</style>
</head>
<body>
 <h1> Take User Body Measurement </h1>
 <form action="insert_bodymeasurement.php" method="post">
  <label>User ID: <input name="user_id" required></label><br/>
  Height:<br/>
  <label> Feet: <input type="number" name="feet" min="4" max="7" required></label>
  <label> Inches: <input type="number" name="inches" min="0" max="12" required></label><br/>
  Weight:<br/>
  <label> Kg: <input type="text" name="kg" required></label>
  <label> gm: <input type="text" name="gm"  value="0" required></label><br/>
	<label>Date: <input type="date" name="meas_date" required></label><br/>


 <button type="submit" name="submit">Submit</button><br/>
</form>
</body>
</html>
