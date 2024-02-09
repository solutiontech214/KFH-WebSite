<?php 
require('C:\xampp\htdocs\KFH-WebSite\Main\src\lib\Account_Existance.php');
session_start();
$obj=new Account();
if(isset($_POST['submit']))
{
    $email= $_POST['email'];
     $pass= $_POST['pass'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500&display=swap" rel="stylesheet">

</head>
<body>
    <!-- preloader -->
  <div class="preloader" id="preLoader"></div>

  <!-- login form -->
    <form  action="login.php" class="login" method="POST">
        <span class="span1">
            <a href="index.php"><i class="fa-solid fa-xmark" style="color:white;"></i></a>
            <h2>Login</h2>
        </span>
        <span class="span2">
            <div>
                <input type="email" id="email" class="email" name="email" placeholder="Email" required >
                <i class="fa fa-envelope icon" style="color: #bb0120;"></i>
            </div>
            <span class="error-msg" id="email-error">
                <!-- erroe msg -->
            </span>
            <br>
            <div>
                <input type="password" id="passwordInput" name="pass" class="email" placeholder="Password" name="password" required>
                <i class="fa-solid fa-eye eye" onclick=" togglePasswordVisibility()" style="cursor: pointer; color: #bb0120;"></i>
            </div>
            <span class="error-msg" id="password-error">
                <!-- error msg -->
            </span>
        </span>

        <!-- forget password -->
        <span class="span3">        
            <a href="forgot_pass.php">Forget Password?</a>
        </span>
        
        <!-- buttons login and signup -->
        <button class="btn" type="submit" name="submit" id="btn-login">Login</button>
      
        <hr width="84%" style="margin-top: 20px;">

        <a href="./signup.php" class="new-account">Create a new account <i class="fa-solid fa-user-plus"></i></a>



        <span class="gym-name">
            <h3>@KANDRE'S FITNESS HUB</h3>
        </span>
    </form>

    <script src="../js/form.js"></script>
</body>
</html>