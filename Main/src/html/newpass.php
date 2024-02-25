<?php
require('C:\xampp\htdocs\KFH-WebSite\Main\src\lib\Account_Existance.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
           
require 'C:\xampp\htdocs\src\Exception.php';
require 'C:\xampp\htdocs\src\PHPMailer.php';
require 'C:\xampp\htdocs\src\SMTP.php';
session_start();
$obj = new Account();
if(isset($_POST['submit']) )
{
    if($_POST['a_pass']==$_POST['c_pass'])
    {
        if($obj->update_pass($_SESSION['otp_mail'],$_POST['a_pass']) )
        {

            $mail = new PHPMailer(true);
    if(isset($_SESSION['otp_mail'])){
 try {
     //Server settings
     $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
     $mail->isSMTP();                                            //Send using SMTP
     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
     $mail->Username   = 'onkargutti94@gmail.com';                     //SMTP username
     $mail->Password   = 'lbbt yneb pzgc ddps';                               //SMTP password
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
     $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
     $res_name=$_SESSION['name'];
     //Recipients
     $mail->setFrom('onkargutti94@gmail.com', 'KFH Solapur');
     $mail->addAddress($_SESSION['otp_mail'],$res_name);     //Add a recipient
                //Name is optional
     $mail->addReplyTo('onkargutti94@gmail.com', 'Information');
    
 
     //Attachments
     //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
     //$mail->addAttachment('C:\xampp\htdocs\KFH-WebSite\Main\Images\KFH.png', 'new.jng');    //Optional name
 
     //Content
     $mail->isHTML(true);                                  //Set email format to HTML
     $mail->Subject = ' Password Updated ...';
     
     $mail->Body    = "<h1>💁 Dear  $res_name  </h1><br> <h2>Your Password is Successfully Update. 👍</h2>";
     //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
     $mail->send();
     unset($_SESSION['otp_mail']);
     unset($_SESSION['name']);
   
    
 } catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
 }
}

            
        ?>
        <div class="alert1">
              Password Updated Successfully..😀
           </div>
           <script>
  // Delay the redirection for 3 seconds (3000 milliseconds)
  setTimeout(function() {
    window.location.href = "nxt.php";
  }, 3000);
</script>
               <?php

        }
        else{
            ?>
            <div class="alert">
                  Unable to update Password..!!!
               </div>
                   <?php   
        }
    }
    else{
        ?>
 <div class="alert">
       Password are not matching Provided by u.!!
    </div>
        <?php

    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500&display=swap" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <style>
        * {
            letter-spacing: 1px;
        }
        body {
            background: #222121;
            color: white;
            font-family: "Rajdhani", sans-serif;
        }

        .logo {
            width: 100%;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 100%;
            height: 60vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .c {
            width: 800px;
        }
        .forms-group input {
            font-size: 26px;
            font-weight: 500;
            color: #000;
        }

        ._btn {
            background: #bb0120;
            color: black;
            font-size: 16px;
            font-weight: 500;
            border: 0;
            box-shadow: 0 0 5px black;
        }
        ._btn:hover {
            background: #000;
            color: rgb(255, 255, 255);
        }
        i {
            position: absolute;
            margin-top: -25px;
            margin-left: 340px;
        }
        .alert {
    padding: 15px;
    background-color: #f44336; /* Red background color */
    color: white; /* White text color */
    margin-bottom: 15px; /* Add some space at the bottom */
}
.alert1 {
    padding: 15px;
    background-color: green; /* Red background color */
    color: white; /* White text color */
    margin-bottom: 15px; /* Add some space at the bottom */
}
    </style>
</head>

<body>

    <div class="logo">
        <img src="../../Images/KFH.png" alt="logo" width="120px" height="50px">
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 c">
                <h2 class="text-center mb-4">New User Password Setup</h2>
                <form method="POST" >
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="a_pass"placeholder="Enter password"
                            style="font-size: 16px; font-weight: 500; color: #000;" />
                        <i class="fa-solid fa-eye eye" onclick=" togglePasswordVisibility()"
                            style="cursor: pointer; color: rgb(0, 0, 0)"></i>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" name="c_pass" class="form-control" id="confirmPassword" placeholder="Confirm password"
                            style="font-size: 16px; font-weight: 500; color: #000;" />
                        <i class="fa-solid fa-lock" style="cursor: pointer; color: rgb(0, 0, 0)"></i>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block _btn">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById("password");
            const eyeIcon = document.querySelector(".eye");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }
    </script>
</body>

</html>