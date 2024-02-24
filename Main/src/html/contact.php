<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'C:\xampp\htdocs\src\Exception.php';
require 'C:\xampp\htdocs\src\PHPMailer.php';
require 'C:\xampp\htdocs\src\SMTP.php';
require('C:\xampp\htdocs\KFH-WebSite\Main\src\lib\Account_Existance.php');
$obj=new Account();
session_start();


if(isset($_POST['submit'])  )
{
    if(isset($_SESSION['log']))
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
       
        //Recipients
        $mail->setFrom($_SESSION['log'], $_SESSION['feed_name']);
        $mail->addAddress('onkargutti94@gmail.com',"KFH-Solapur");     //Add a recipient
                   //Name is optional
        $mail->addReplyTo('onkargutti94@gmail.com', 'Information');
       
    
        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('C:\xampp\htdocs\KFH-WebSite\Main\Images\KFH.png', 'new.jng');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Feedback :';
        $mail->Body    ="<h1>". $_POST['message']."<br> Mob NO : ".$_POST['phone']."<br>Name :".$_SESSION['feed_name'];
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
       
    } catch (Exception $e) {
       // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    }
    else{
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
            padding: 15px;
            background-color: #4CAF50; /* Green color */
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
                    <a href="">AboutUs</a>
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
                <form  method="POST">
                    <div class="inputs">
                        <label for="name">Name:</label><br>
                        <input type="text" id="name" name="name" value="<?php if(isset($_SESSION['feed_name']) && isset($_SESSION['log'])){echo $_SESSION['feed_name'];}?>" disabled><br>
                        <span>
                            <!-- errrro -->
                        </span>
                    </div>
                    <div class="inputs">
                        <label for="email">Email:</label><br>
                        <input type="email" id="email" name="email"  value="<?php if(isset($_SESSION['log'])){echo $_SESSION['log'];}?>" disabled><br>
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
                                if(isset($_POST['submit']) && isset($_SESSION['log']))
                                {
                                   ?> <span class="alert"> <?php echo "Feedback Sent ..."; ?></span><?php 
                                }
                           ?>
                   
                       
                    <br>
                    <button type="submit" name="submit">Submit</button>
                </form>
                <div class="follow-link">
                    <a href="https://www.instagram.com/reel/CyFPB3YoEJy/?utm_source=ig_web_copy_link"><i class="fa-brands fa-instagram "></i></a>
                    <a href="https://www.facebook.com/KandreFitnessHub/"><i class="fa-brands fa-facebook "></i></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
 header("refresh:1");
 
if(isset($_SESSION['log']))
{
   
    $res_name=$obj->get_info($_SESSION['log']);
    if($res_name!=false )
    {
      
        $_SESSION['feed_name']=$res_name;
      
      
    }
    else{
        unset( $_SESSION['feed_name']);
    }
   
}


?>