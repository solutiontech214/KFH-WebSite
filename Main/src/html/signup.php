<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('C:\xampp\htdocs\KFH-WebSite\Main\src\lib\Account_Existance.php');
$obj = new Account();
$error = array('a_pass' => 'unset', 'c_pass' => 'unset');



if (isset($_POST['submit'])) {
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $a_pass = $_POST['a_pass'];
    $c_pass = $_POST['c_pass'];

    if ($_POST['a_pass'] == $_POST['c_pass']) {
        if (strlen($_POST['a_pass']) >= 8) {
            if ($obj->is_account_exists($email, $a_pass)) {
                // Account already exists, redirect to login
                header("Location: a_exists.php");
                exit();
            } else {
                // Account doesn't exist, create account
                if ($obj->create_account($f_name, $l_name, $email, $a_pass, $c_pass)) {

                    require 'C:\xampp\htdocs\src\Exception.php';
                    require 'C:\xampp\htdocs\src\PHPMailer.php';
                    require 'C:\xampp\htdocs\src\SMTP.php';

                    //Create an instance; passing `true` enables exceptions
                    $mail = new PHPMailer(true);

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
                        $name = $_POST['f_name'];
                        //Recipients
                        $mail->setFrom('onkargutti94@gmail.com', 'KFH Solapur');
                        $mail->addAddress($_POST['email'], $_POST['f_name'] . " " . $_POST['l_name']);     //Add a recipient
                        //Name is optional
                        $mail->addReplyTo('onkargutti94@gmail.com', 'Information');


                        //Attachments
                        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                        $mail->addAttachment('C:\xampp\htdocs\KFH-WebSite\Main\Images\KFH.png', 'new.jng');    //Optional name

                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'Account Creation';
                        $mail->Body    = "<h1>Congratulations 🎉 $name  </h1><br> <h2>Your Account is Successfully Created ..</h2>";
                        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                        $mail->send();
                    } catch (Exception $e) {
                        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }


                    header("Location: login.php");
                    exit();
                }
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>

    <div class="x">
        <a href="index.php"><i class="fa-solid fa-xmark fa-2x" style="color:white;"></i></a>
    </div>


    <div class="preloader1" id="preLoader1"></div>


    <div id="preloader" style="display: none;">
        <p>Checking email account...</p>
    </div>

    <div id="perent">
        <form class="signup" method="POST">
            <span>
                <h1>SignUp</h1>
            </span>
            <div class="inputs">
                <span>
                    <input type="text" placeholder="First Name" name="f_name" required>
                    <i class="fa-solid fa-user"></i>
                    <div class="error-msg">
                        <!-- error -->
                    </div>
                </span>
                <span>
                    <input type="text" placeholder="Last Name" name="l_name" required>
                    <i class="fa-solid fa-user"></i>
                    <div class="error-msg">

                    </div>
                </span>
                <span>
                    <input type="email" placeholder="Email" name="email" required>
                    <i class="fa fa-envelope icon"></i>
                    <div class="error-msg">
                        <!-- error -->
                    </div>
                </span>
                <span>
                    <input type="password" placeholder="Create Password" name="a_pass" id="passwordInput" required>
                    <i class="fa-solid fa-eye eye" onclick=" togglePassword()" style="cursor: pointer;"></i>
                    <div class="error-msg">
                        <!-- error -->

                        <strong><label><?php if (isset($_POST['submit']) && strlen($_POST['a_pass']) < 8) {
                                            $error['a_pass'] = 'set';
                                            echo "Password must be greater than 8 !!";
                                        } ?> </label></strong>
                    </div>
                </span>
                <span>
                    <input type="password" placeholder="Confirm Password" name="c_pass" id="recheckpassword" required>
                    <i class="fa-solid fa-lock"></i>
                    <div class="error-msg">
                        <!-- error -->
                        <strong><label><?php if (isset($_POST['submit']) && $_POST['a_pass'] != $_POST['c_pass']) {
                                            $error['c_pass'] = 'set';
                                            echo "Password isn't matches.!!";
                                        }
                                        ?></label></strong>
                    </div>
                </span>
            </div>
            <div class="signup-btn">
                <button type="submit" name="submit" id="signupButton">SignUp</button>
            </div>
            <span class="haveaccount">
                <a href="login.php">Already have an account<i class="fa-solid fa-right-to-bracket"></i></a>
            </span>
            <div class="account-existance" style="margin-top:20px">
            </div>
            <hr width="90%" style="color: black; margin-top: 10px;">
            <div class="gym-name">
                <h3>@KANDRE'S FITNESS HUB</h3>
            </div>
        </form>
        <?php
        if (isset($_GET['showPreloader'])) {
            echo '<script>document.getElementById("preloader").style.display = "flex";</script>';
        }
        ?>
    </div>





    <script>
        function togglePassword() {
            const passwordInput = document.getElementById("passwordInput");
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

        let loader = document.getElementById("preLoader1")

        window.addEventListener("load", () => {
            loader.style.display = "none";
        });
    </script>
</body>

</html>