<?php

$host="localhost";
$user="root";
$password="";
$db="keepit";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])){

  $uname=$_POST['username'];
  $password=$_POST['password'];

  $sql="SELECT * FROM loginform WHERE user='".$uname."' AND Pass='".$password."' limit 1";

  $result=mysql_query($sql);

  if(mysql_num_rows($result)==1){
    echo " You Have Successfully Logged in";
    exit();
  }

  else{
    echo " You Have Entered Incorrect Password";
    exit();
  }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Hey Peeps! | KeepIt</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200&family=Montserrat:wght@500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
          <form action="#">
            <h1>Create Account</h1>
            <div class="social-media">
              
            </div>
            <span>or sign up using your email account</span>
            <input type="name" placeholder="Name" required>
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <button>Sign Up</button>
            
          </form>
        </div>
        <div class="form-container log-in-container">
          <form method="POST" action="#">
            <h1>Log In</h1>
            <div class="social-media">
              <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
              <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or sign up using your email account</span>
            <input type="text" name="name" placeholder="username" required>
            <input type="password" name="password" placeholder="Password" required>
            <a href="#">Forgot your password?</a>
            <button>Sign In</button>
            
          </form>
        </div>
        <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel left">
            <h1>Welcome Back!</h1>
            <p>To keep connected with us please login with your personal info</p>
            <button class="ghost" id="signIn">Log In</button>          
          </div>
          <div class="overlay-panel right">
            <h1>HEY USERS!</h1>
            <p>Sign up for an account and start your journey now!!</p>
            <button class="ghost" id="signUp">Sign Up</button>
          </div>
          </div>
          </div>
      </div>
      <script src="login.js"></script>
</body>
</html>