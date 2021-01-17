<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Workout Routine </title>
<link rel="stylesheet" href="css/admindesign.css">
<style>
body{
	margin:4%;
	padding:3%;
}
label{
line-height: 4;
}
label input{
	padding: 10px;

}
select{
	padding: 9px;
}
button{
	height:30px;
}
</style>
</head>
<body>
 <h1> Set Routine</h1>
 <form action="insert_alluser_routine.php" method="post">
  <label>User ID: <input name="user_id" required></label><br/>
  Routine Day:  <select name="routine_day">
  <option value="A) Saturday"  selected>Saturday</option>
  <option value="B) Sunday" >Sunday</option>
  <option value="C) Monday" >Monday</option>
  <option value="D) Tuesday" >Tueday</option>
  <option value="E) Wednesday" >Wednesday</option>
  <option value="F) Thursday" >Thursday</option>
</select><br/>
  <label>Exercises: <input type="text" name="exc_name_1"placeholder="exercise 1" required></label>
  <label><input type="text" name="exc_name_2" placeholder="exercise 2"required></label>
  <label><input type="text" name="exc_name_3" placeholder="exercise 3"required></label>
  <label><input type="text" name="exc_name_4" placeholder="exercise 4"></label>
<label><input type="text" name="exc_name_5" placeholder="exercise 5"></label>  <br/>
<label>Sets: <input name="sets" required></label><br/>
<label>Reps: <input name="reps" required></label><br/>
 <button type="submit" name="submit">Submit</button><br/>
</form>
</body>
</html>
