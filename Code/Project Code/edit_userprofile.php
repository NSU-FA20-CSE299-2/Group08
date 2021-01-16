<?php
require 'connection.php';
$user_id=$_GET['id'];
$sql="Select * from user_info
where user_id='$user_id' ";
$get=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($get);
echo '
<html >
<head>
	<meta charset="UTF-8">
	<title>User Reg. </title>
	<style>
	body{
		font-family: "Lucida Console";
		margin: 5%;
		padding: 2%;
		background-image: url("img/background.jpg");
		background-position:
		center;
	 background-repeat: no-repeat;
	 background-size:cover;
	}
	header{
		position: absolute;
		left: 475px;



	}
	form{
		background-color: rgba(174, 182, 191,.5);
		position: relative;
		left: 40%;
		margin-left: -100px;
		margin-top: 50px;
		font-size: large;
		font-weight: bold;
		display:inline-block;
		width: 450px;
		height: 450px;
		padding: 2%;
		border-radius: 15px;
		border-style:ridge;
		border-color: inherit;
	}

	input{ margin: 5px;
		padding: 9px;

	background-color: rgba(174, 182, 191,.4);
	width: 170px;
	}
	.gend{
   width=10px;
	 display: block;

	}

button{
	height: 30px;
		 width: 100px;
		 background-color:inherit;
		 transition-property: all;
		 -webkit-transition-property: all;
	}
	button:hover{
		background-color:rgba(93, 109, 126,.7);
		border-radius: 10px;
	}

	select{
		background-color: rgba(174, 182, 191,.4);
	}
	</style>
</head>
<body>
 <form action="update_userprofile.php?id='.$row['user_id'].'" method="post">
  <label>Name: <input type="text" name="user_name" value="'.$row['user_name'].'" required></label><br/>
	<label>Password: <input type="password" name="user_password"
  value="'.$row['user_password'].'" required></label><br/>
  <label>Email: <input type="email" name="user_email" value="'.$row['user_email'].'" required></label><br/>
  <label>Phone:  <input name="user_phone" value="'.$row['user_phone'].'" required></label><br/>
  <label> Address: <input type="text" name="user_address" value="'.$row['user_address'].'"></label><br/>
  <label>Age: <input name="user_age" value="'.$row['user_age'].'"></label><br/>
   Gender:
  <label class="gend" ><input type="radio" name="user_gender" value="Male" >Male</label>
  <label class="gend"><input type="radio" name="user_gender" value="Female">Female</label>
    <label class="gend"><input type="radio" name="user_gender" value="Other">Other</label> <br/>

 <button type="submit" name="submit">Submit</button><br/>
</form>
</body>
</html>'; ?>
