<html>
 <head>
   <title>Login Lobby</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <style>
   body{
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
     width: 400px;
     height: 270px;
     padding: 2%;
     border-radius: 15px;
     border-style:ridge;
     border-color: inherit;
   }

  input{ padding: 10px;
 box-sizing: content-box;
 background-color: rgba(174, 182, 191,.4);
 width: 170px;
   }
   .box{
      position:relative;
      margin-top: 5px;
   }
   #login{
     position: relative;
     left:7em;
   }
   #login input{
      width: 5em;
      transition-property: all;
      -webkit-transition-property: all;
   -webkit-transition-delay: .01s;
   -webkit-transition-duration: 1s;
   -webkit-transition-timing-function:ease-in-out;
   }
   #login input:hover{
     background-color:rgba(93, 109, 126,.7);
     border-radius: 10px;
   }

   select{
     background-color: rgba(174, 182, 191,.4);
   }
   </style>
 </head>
 <body >
   <header>
     <h1>Fitness365</h1>
   </header>

   <form action="redirect.php" method="post">
     <label class="box" >ID: <input type="text" name="id"></label></br>
     <label class="box">Password: <input type="password" name="password"></label></br>
      <label class="box">Gym name: <input type="text" name="gymname"></label></br> <!-- new addition-->
     <label class="box">Type: <select name="type">
       <option value="user">User</option>
       <option value="admin">Admin</option>
     </select></label>
     </br>
     <label id="login"><input type="submit" name="login" value="Login"></label></form>
   </body>
   </html>
