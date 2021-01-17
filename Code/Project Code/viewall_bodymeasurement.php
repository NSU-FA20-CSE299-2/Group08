<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admindesign.css">

    <title>View All Body Measurement</title>
  </head>
  <body>
    <header>
    <h1>User Body Status</h1>
<?php
require 'connection.php';
$view=mysqli_query($conn,"select * from body_measurement");
if(mysqli_num_rows($view)>0)
{
  echo  '<table>
    <tr> <th> User ID </th>
            <th> Age</th>
            <th> Gender </th>
            <th>Height (m)</th>
            <th> Weight (kg)</th>
            <th> BMI </th>
            <th> Fat (%) </th>
            <th>Lean Mass (kg)</th>
            <th>Measured Date</th>
            <th>Status</th>
    </tr>';
while($row=mysqli_fetch_assoc($view))
{
echo '<tr>
