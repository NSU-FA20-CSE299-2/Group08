<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Reg. </title>
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
 <h1> Register User</h1>
 <form action="insert_user.php" method="post">
  <label>User ID: <input name="user_id" required></label><br/>
  <label>Name: <input type="text" name="user_name" required></label><br/>
	<label>Password: <input type="password" name="user_password" required></label><br/>
  <label>Instructor ID:<input name="instructor_id" required></label><br/>
  <label>Email: <input type="email" name="user_email" required></label><br/>
  <label>Phone:  <input name="user_phone" required></label><br/>
  <label> Address: <input type="text" name="user_address"></label><br/>
  <label>Age: <input name="user_age"></label><br/>



 <button type="submit" name="submit">Submit</button><br/>
</form>
</body>
</html>
