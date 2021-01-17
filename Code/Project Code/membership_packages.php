<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Membership Packages</title>
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
 <h1> Edit Packages </h1>
 <form action="insert_mem_pack.php" method="post">
    Package ID: <br/>
   <label> <input type="radio" name="package_id" value="7"> Weekly</label><br/>
   <label> <input type="radio" name="package_id" value="30"> Monthly</label><br/>
   <label> <input type="radio" name="package_id" value="180"> Half Yearly</label><br/>
   <label> <input type="radio" name="package_id" value="365"> Yearly</label><br/>
 <label>Package Amount: <input name="package_amount" required></label><br/>
 <label> Package Name:  <input type="text" name="package_name" required></label><br/>
 <button type="submit" name="submit">Submit</button><br/>
</form>
</body>
</html>
