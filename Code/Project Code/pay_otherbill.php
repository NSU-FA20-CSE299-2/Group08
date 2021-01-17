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
