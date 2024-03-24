<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
           
require 'C:\xampp\htdocs\src\Exception.php';
require 'C:\xampp\htdocs\src\PHPMailer.php';
require 'C:\xampp\htdocs\src\SMTP.php';
require('C:\xampp\htdocs\KFH-WebSite\Main\src\lib\Account_Existance.php');
$obj = new Account();
$num=rand(100000,600000);
     $_SESSION['otp']=$num;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgetpass</title>
    <link rel="stylesheet" href="../css/forgetpass.css">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
  <div class="logo">
    <img src="../../Images/KFH.png" alt="logo" width="120px" height="50px">
  </div>

<div class="container">
    <form  method="post">
      <h2>Forget Password</h2>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <div class="error-msg">
        <span class="error">
        <?php
        if(isset($_POST['submit']))
        {

        
       echo  $name=$obj->get_info($_POST['email']);
        $_SESSION['name']=$name;
        if($name!=false)
        {

        
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
     $res_name=$_SESSION['name'];
     //Recipients
     $mail->setFrom('onkargutti94@gmail.com', 'KFH Solapur');
     $mail->addAddress($_POST['email'],$res_name);     //Add a recipient
                //Name is optional
     $mail->addReplyTo('onkargutti94@gmail.com', 'Information');
    $_SESSION['otp_mail']=$_POST['email'];
 
     //Attachments
     //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
     //$mail->addAttachment('C:\xampp\htdocs\KFH-WebSite\Main\Images\KFH.png', 'new.jng');    //Optional name
 
     //Content
     $mail->isHTML(true);                                  //Set email format to HTML
     $mail->Subject = 'Update Password';
     
     $mail->Body    = "<h1>💁 Dear  $name  </h1><br> <h2>You are requested to update your password <br> Here is your OTP : <label style='text-decoration:underline;color:blue;' >$num </label></h2>";
     //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
     $mail->send();
     header("Location:otp.php");
    
 } catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
 }
 
        }
        else{
  echo "Account not found..!!";
        }
      }
        ?>
        </span>
        </div>
      </div>
      <button type="submit" name="submit">Send OTP</button>
    </form>
  </div>
  <div>
    <h2 style="text-align:center;">Please provide your email address above to receive a one-time password (OTP) for verification.</h2>
  </div>
</body>
</html>
