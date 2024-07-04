<?php 
include('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>iniciar-sesion</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container2">
         <div class="main">  	
            <input type="checkbox" id="chk" aria-hidden="true">

               <div class="login">
                  <form class="form">
                     <label for="chk" aria-hidden="true">Log in</label>
                     <input class="input" type="email" name="email" placeholder="Email" required="">
                     <input class="input" type="password" name="pswd" placeholder="Password" required="">
                     <button>Log in</button>
                  </form>
               </div>
               <div class="register">
                  <form class="form">
                     <label for="chk" aria-hidden="true">Register</label>
                     <input class="input" type="text" name="txt" placeholder="Username" required="">
                     <input class="input" type="email" name="email" placeholder="Email" required="">
                     <input class="input" type="password" name="pswd" placeholder="Password" required="">
                     <button>Register</button>
                  </form>
               </div>
         </div>
    </div>
    
  </body>
</html>