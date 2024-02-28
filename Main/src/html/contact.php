<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\src\Exception.php';
require 'C:\xampp\htdocs\src\PHPMailer.php';
require 'C:\xampp\htdocs\src\SMTP.php';
require('C:\xampp\htdocs\KFH-WebSite\Main\src\lib\Account_Existance.php');
$obj = new Account();
session_start();


if (isset($_POST['submit'])) {
    if (isset($_SESSION['log'])) {

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

            //Recipients
            $mail->setFrom($_SESSION['log'], $_SESSION['feed_name']);
            $mail->addAddress('onkargutti94@gmail.com', "KFH-Solapur");     //Add a recipient
            //Name is optional
            $mail->addReplyTo('onkargutti94@gmail.com', 'Information');


            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('C:\xampp\htdocs\KFH-WebSite\Main\Images\KFH.png', 'new.jng');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Feedback :';
            $mail->Body    = "<h1>" . $_POST['message'] . "<br> Mob NO : " . $_POST['phone'] . "<br>Name :" . $_SESSION['feed_name'];
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
        } catch (Exception $e) {
            // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
?>
        <script>
            // Delay the redirection for 3 seconds (3000 milliseconds)
            setTimeout(function() {
                window.location.href = 'redirect.php';
            }, 3000);
        </script>
<?php
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../css/contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .alert {
            padding: 10px 20px;
            margin: 0;
            background-color: #4CAF50;
            /* Green color */
            color: white;
            margin-bottom: 15px;
            font-size: larger;
        }
    </style>
</head>

<body>
    <div class="containers">
        <div class="container c1">
            <div class="nav">
                <div class="logo">
                    <img src="../../Images/KFH.png" alt="logo" width="120px" height="50px">
                </div>
                <div class="nav-items">
                    <a href="./index.php">Home</a>
                    <a href="./service.php">Services</a>
                    <a href="">Membership</a>
                    <a href="./aboutus.php">AboutUs</a>
                </div>
            </div>
            <div class="info">
                <h1>Contact Us</h1>
                <div class="gym">
                    <div class="contact solapur">
                        <h2>Solapur</h2>
                        <li><a href=""><i class="fa-solid fa-phone fa-shake call"></i><span> +91 70226 69007</span></a></li>
                        <li><a href=""><i class="fa-solid fa-envelope fa-bounce mail"></i><span> kandrefitnesshub@gmail.com</span></a></li>
                        <p><a href="https://www.google.com/maps/place/Kandre's+Fitness+Hub/@17.6354542,75.9152472,17z/data=!3m1!4b1!4m6!3m5!1s0x3bc5da1c451ff087:0x109dd48c98e53aab!8m2!3d17.6354542!4d75.9152472!16s%2Fg%2F11gcm07_jv?authuser=0&hl=en&entry=ttu" target="_blank"><i class="fa-solid fa-location-dot fa-beat"></i><span> Kandre's Fitness Hub, Third floor,<br> Mhetre Tower, Vishwakaran Park,<br> Near Aasara Bridge, Jule Solapur, Solapur, 413004 </span></a></p>
                    </div>
                    <svg class="line">
                        <line x1="0" y1="50%" x2="100%" y2="50%" stroke="#fff" stroke-dasharray="5,5" />
                    </svg>
                    <div class="timing">
                        <h3>Monday-Saturday</h3>
                        <h5>Timing - 6:00 am to 10:00 pm</h5>
                        <h5>Sunday - Closed</h5>
                    </div>
                </div>

                <div class="gym g2">
                    <div class="contact pandharpur">
                        <h2>Pandharpur</h2>
                        <li><a href=""><i class="fa-solid fa-phone fa-shake call"></i><span> +91 74998 21020</span></a></li>
                        <li><a href=""><i class="fa-solid fa-envelope fa-bounce mail"></i><span> kandrefitnesshub@gmail.com</span></a></li>
                        <p><a href="https://www.google.com/maps/place/Kandre's+Fitness+Hub+(KFH)/@17.6804561,75.3110741,17z/data=!3m1!4b1!4m16!1m9!3m8!1s0x3bc4178a6d1fb633:0x478df2fe22ceed4b!2sKandre's+Fitness+Hub+(KFH)!8m2!3d17.6804561!4d75.313649!9m1!1b1!16s%2Fg%2F11c1t55_2v!3m5!1s0x3bc4178a6d1fb633:0x478df2fe22ceed4b!8m2!3d17.6804561!4d75.313649!16s%2Fg%2F11c1t55_2v!5m1!1e4?entry=ttu" target="_blank"><i class="fa-solid fa-location-dot fa-beat"></i><span> Kandre's Fitness Hub,<br>Pandharpur - Pune Road,<br> Isbavi, Pandharpur</span></a></p>
                    </div>
                    <svg class="line">
                        <line x1="0" y1="50%" x2="100%" y2="50%" stroke="#fff" stroke-dasharray="5,5" />
                    </svg>
                    <div class="timing">
                        <h3>Monday-Saturday</h3>
                        <h5>Timing - 5:30 am to 10:00 pm</h5>
                        <h5>Sunday - Closed</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="container c2">
            <div>
                <h1>Give Your Details</h1>
                <form method="POST">
                    <div class="inputs">
                        <label for="name">Name:</label><br>
                        <input type="text" id="name" name="name" value="<?php if (isset($_SESSION['feed_name']) && isset($_SESSION['log'])) {
                                                                            echo $_SESSION['feed_name'];
                                                                        } ?>" disabled><br>
                        <span>
                            <!-- errrro -->
                        </span>
                    </div>
                    <div class="inputs">
                        <label for="email">Email:</label><br>
                        <input type="email" id="email" name="email" value="<?php if (isset($_SESSION['log'])) {
                                                                                echo $_SESSION['log'];
                                                                            } ?>" disabled><br>
                        <span>
                            <!-- errrro -->
                        </span>
                    </div>
                    <div class="inputs">
                        <label for="phone">Phone:</label><br>
                        <input type="tel" id="phone" name="phone"><br>

                    </div>
                    <div class="inputs">
                        <label for="message">Message:</label><br>
                        <textarea id="message" name="message" rows="4" required></textarea><br>
                    </div>



                    <?php
                    if (isset($_POST['submit']) && isset($_SESSION['log'])) {
                    ?> <span class="alert"> <?php echo "Feedback Sent ..."; ?></span><?php
                                                                                                }
                                                                                                    ?>


                    <br>
                    <button type="submit" name="submit">Submit</button>
                </form>
                <div class="follow-link">
                    <a href="https://www.instagram.com/reel/CyFPB3YoEJy/?utm_source=ig_web_copy_link" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                        </svg></a>
                    <a href="https://www.facebook.com/KandreFitnessHub/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                        </svg></a>
                </div>
            </div>
        </div>
    </div>
    <script>
        setTimeout(function() {
            document.querySelector('.alert').style.display = 'none';
        }, 2000); // 2000 milliseconds = 2 seconds
    </script>
</body>

</html>
<?php
header("refresh:1");

if (isset($_SESSION['log'])) {

    $res_name = $obj->get_info($_SESSION['log']);
    if ($res_name != false) {

        $_SESSION['feed_name'] = $res_name;
    } else {
        unset($_SESSION['feed_name']);
    }
}
?>