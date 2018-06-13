<?php
    
    if(isset($_POST['btnLogin'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        
        if(isset($_POST['remember'])){
            $hour = time() + 60; //sets for 1 minutes
            setcookie('username', $username,$hour );
            setcookie('password', $password,$hour);
        }

        //set session for successful login
        session_start();
        $_SESSION['login_user']=$username;
        header("location:home.php");
    }
    
    if(isset($_COOKIE['username'])) {
        $cookie_username= $_COOKIE['username'];
        $cookie_password= $_COOKIE['password'];
    }
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h2 style="text-align: center;">Introduction to Cookies and Sessions in PHP</h2>

<div>
  
  <form class="modal-content animate" method="POST">
    <div class="container">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" value="<?php if(isset($cookie_password)) echo $cookie_username?>" required>
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" value="<?php if(isset($cookie_password)) echo $cookie_password?>" required>
      <input name="btnLogin" type ="submit" class="button" value="Login">
      <label>
        <input type="checkbox" name="remember"> Remember me
      </label>
    </div>
  </form>
</div>
</body>
</html>