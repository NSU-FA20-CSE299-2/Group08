<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trainer Reg. </title>
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
 <h1> Register Trainer </h1>
 <form action="insert_trainer.php" method="post">
  <label>Trainer ID: <input name="trainer_id" required></label><br/>
  <label>Name: <input type="text" name="trainer_name" required></label><br/>
  <label>Email: <input type="email" name="trainer_email" required></label><br/>
  <label>Phone:  <input name="trainer_phone" required></label><br/>
  <label> Address: <input type="text" name="trainer_address"></label><br/>
   Gender:
  <label><input type="radio" name="trainer_gender" value="Male">Male</label>
  <label><input type="radio" name="trainer_gender" value="Female">Female</label>
    <label><input type="radio" name="trainer_gender" value="Other">Other</label> <br/>
  <label> Salary: <input  name="trainer_salary" required></label><br/>
  <label> Hire Date: <input type="date" name="hire_date"></label><br/>

 <button type="submit" name="submit">Submit</button><br/>
</form>
</body>
</html>
