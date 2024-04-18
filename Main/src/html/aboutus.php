<?php
session_start();

?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AboutUs</title>
    <link rel="stylesheet" href="./../css/aboutus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500&display=swap" rel="stylesheet" />
</head>
<body>
    <nav>
        <div class="logo">
            <a href="./index.php"><img src="./../../Images/KFH.png" alt="" width="120px" height="50px"></a>
        </div>
        <div class="items">
            <a href="./index.php">Home</a>
            
            
            <?php if (isset($_SESSION['log'])) {
        echo '<a href="./contact.php" class="_contact">Contact</a>';
      } else {
        echo '<a href="./loginservice.php" class="a">Contact</a>';
      } ?>
        </div>
    </nav>
    <div class="intro">
        <h1>AboutUs</h1>
    </div>
    <div class="container">
        <div class="cont">
            <h1>KFH in Pandharpur!</h1>
            <div class="img-cont">
                <img src="../../Images/aboutgym.jpg" alt="" width="400px" height="250px">
                <img src="../../Images/aboutgym7.jpg" alt="" width="400px" height="250px">
                <img src="../../Images/aboutgym2.jpg" alt="" width="400px" height="250px">
                <img src="../../Images/aboutgym6.jpg" alt="" width="400px" height="250px">
                <img src="../../Images/aboutgym4.jpg" alt="" width="400px" height="250px">
                <img src="../../Images/aboutgym5.jpg" alt="" width="400px" height="250px">
                <img src="../../Images/aboutgym3.jpg" alt="" width="400px" height="250px">
            </div>
        </div>
        <div class="aboutus">
            <p>
            Welcome to KFH Gym, where fitness meets excellence. Established in Pandharpur, we've been proud to serve the community and help individuals achieve their fitness goals since [year of establishment].<br>
                Kandre's Fitness Hub, which has been operating in the fitness industry for over 9 years with great success in Pandharpur,<b style="text-decoration:underline; color:#316FF6;">has now expanded to Solapur.</b>
            </p>
            <p>
                At Kandre's Fitness Hub we aim to create a healthy and fun environment
                for our clients and team to deliver positive results for the success
                of our staff and business. Team members are hand picked for their
                ability to provide excellent service and capabilities to handle
                responsibilities professionally.
            </p>
            <h2>Mission</h2>
            <p>Our mission at KFH Gym remains the same: to provide a supportive environment where individuals of all fitness levels can thrive. With our expansion to Solapur, we are excited to extend our reach and impact, empowering more people to lead healthier lives through personalized training programs and state-of-the-art facilities.</p>
            <h2>Why Choose KFH Gym?</h2>
            <p>
            <ul>
                <li><b>Experience:</b> With years of experience serving the Pandharpur community, we have honed our expertise in delivering results-driven fitness solutions.</li>
                <li><b>Community:</b> Our gym is more than just a place to work out – it's a community where members support and inspire each other to reach their fitness goals.</li>
                <li><b>Expansion to Solapur:</b> Our decision to expand to Solapur reflects our commitment to providing accessible and high-quality fitness services to a broader audience.</li>
            </ul>
            </p>
                <h1>Join Us Today</h1>
            <p>
                Whether you're in Pandharpur or Solapur, we invite you to join the KFH Gym community and embark on a journey to transform your body and elevate your spirit. Together, let's achieve greatness through fitness.
            </p>
        </div>
    </div>
    <footer class="_footer">
        <div class="links">
        <a href="https://www.facebook.com/KandreFitnessHub/" target="_blank">
            <div class=" media facebook">
                <i class="fa-brands fa-facebook-f" style="color: #316FF6;"></i>
            </div>
        </a>
        <a href="https://www.instagram.com/reel/CyFPB3YoEJy/?utm_source=ig_web_copy_link" target="_blank">
            <div class=" media insta">
                <i class="fa-brands fa-instagram" style="color: #eb003b;"></i>
            </div>
        </a>
        </div>
        <div class="_info">
            <a href="#">Kandre's Fitness Hub, Third floor,Mhetre Tower, Vishwakaran Park,Near Aasara Bridge, Jule Solapur,Solapur, 413004</a>
        </div>
        <div class="contact">
            <a href=""><i class="fa-solid fa-phone"></i> +91 70226 69007</a>
            <a href=""><i class="fa-solid fa-envelope"></i> kandrefitnesshub@gmail.com</a>
        </div>
        <div class="_logo">
            <div>
                <a href="./index.php"><img src="../../Images/KFH.png" alt="" width="125px" height="50px"></a>
            </div>
        </div>
        <div class="copyright">
            <p>@copyright kandresfitnesshub.com</p>
        </div>
    </footer>

</body>

</html>