<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Diet Chart set </title>
	<link rel="stylesheet" href="css/admindesign.css">
	<style>
	body{
		margin:5%;
		padding:4%;
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
 <h1> Set Diet Chart</h1>
 <form action="insert_totaluser_dietchart.php" method="post">
  <label>User ID: <input name="user_id" required></label><br/>
  Meal time:  <select name="meal_time">
  <option value="A) Morning"  selected>Morning</option><br/>
  <option value="B) Noon" >Noon</option><br/>
  <option value="C) Evening" >Evening</option><br/>
  <option value="D) Pre Workout" >Pre Workout</option><br/>
  <option value="E) Post Workout" >Post Workout</option><br/>
  <option value="F) Dinner" >Dinner</option><br/>
</select><br/>
  <label>Food: <input type="text" name="food_a"placeholder="food a.." required></label>
  <label><input type="text" name="food_b" placeholder="food b.."required></label>
  <label><input type="text" name="food_c" placeholder="food c.." required></label>
  <label><input type="text" name="food_d" placeholder="food d.."></label>
  <label><input type="text" name="food_e" placeholder="food e.."></label><br/>
 <button type="submit" name="submit">Submit</button><br/>
</form>
</body>
</html>
