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
