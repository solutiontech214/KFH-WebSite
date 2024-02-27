<?php
session_start();
if(isset($_POST['log_out']))
      {
      unset($_SESSION['log']);
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KFH</title>
</head>
  <link rel="stylesheet" href="../css/indexStyle.css">
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <body>
  <div class="preloader" id="preLoader"></div>
  <nav class="nav-bar">
    <div style="margin-left: 10px;">
      <img src="../../Images/KFH.png" width="120px" height="50px" class="logo">
    </div>
    <div class="items">
      <a href="./index.php">Home</a>
      <div class="dropdown">
        <a href="./service.php" class="dropbtn dropdown-toggle">Srevices</a>
        <div class="dropdown-content">
          <a href="#">Cardio center</a>
          <a href="#">Strength Training</a>
          <a href="#">Group Classes</a>
          <a href="#">Spa</a>
          <a href="#">Personal Training</a>
        </div>
      </div>
      <a href="./classes.php">Classes</a>
      <a href="#">AboutUs</a>
      <a href="./contact.php">Contact</a>
    </div>
    <?php
    if(!isset($_SESSION['log']))
    {

    
    echo '<div class="login">
      <a href="../html/login.php"><button class="btn-login" id="login" type="button" >Login<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
      <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1"/>
      <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117M11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5M4 1.934V15h6V1.077z"/>
    </svg></button></a>
    </div>';
    
    }
    else{
      
      echo '<div class="login">
      <form method="post" >
      <button class="btn-login" id="login" type="submit" name="log_out" value="Log Out">LogOut<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-closed-fill" viewBox="0 0 16 16">
      <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
    </svg></button>
      </form
    </div>';
   
  }
    ?>
  </nav>

  <div class="img-container">
    <img class="mySlides" src="../../Images/gym-img2.jpg" alt="gym">
    <div class="text-info"><p><b>Shape Your Body</b><br> in most <b>Luxurious</b><br> gym in town</p>
      <a href="./service.php"><button class="btn-login" id="login" type="button">See More..</button></a>
    </div>
    <img class="mySlides" src="../../Images/gym2.jpg" alt="gym">
    <img class="mySlides" src="../../Images/gym3.jpg" alt="gym">
    <img class="mySlides" src="../../Images/gym5.jpg" alt="gym">
    <button class="prev-arrow" onclick="plusDivs(-1)">&#10094;</button>
    <button class="next-arrow" onclick="plusDivs(+1)">&#10095;</button>
  </div>


  <div class="cont-info">
    <div class="cont c1">
      <span class="pic">
        <img src="../../Images/cardio-cycle.jpg" alt="">
      </span>
      <span class="pic-info">
        <h1><b>Equipments</b></h1>
        <p><br>
          Having the right exercise equipment is crucial for reaching your fitness goals and maintaining a healthy lifestyle. With the right gear, you will be able to increase your strength, cardiovascular fitness, and general fitness.
        </p>
      </span>
    </div>
    <div class="cont c2">
      <span class="pic-info">
        <h1><b>Zumba Classes</b></h1><br>
        <p>
        Zumba classes combine latin and international music and dance to create a dynamic calorie-burning form of workout for people of all fitness levels and age groups. This effective fitness system features aerobic training that is a fusion of slow and fast rhythms to tone and sculpt your body.        </p>
      </span>
      <span class="pic">
        <img src="../../Images/zumba.jpg" alt="">
      </span>
    </div>
    <div class="cont c3">
      <span class="pic">
        <img src="../../Images/luxury.jpg" alt="">
      </span>
      <span class="pic-info">
        <h1><b>Luxurious Feel</b></h1>
        <p><br>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, excepturi?
        </p>
      </span>
    </div>
    <div class="cont c4">
      <span class="pic-info">
        <h1><b>Personal Traners</b></h1>
        <p><br>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, excepturi?
        </p>
      </span>
      <span class="pic">
        <img src="../../Images/traners.jpg" alt="">
      </span>
    </div>
  </div>

  <div class="container1">
    <img src="../../Images/img2.webp" alt="cardio">
    <img src="../../Images/img3.webp" alt="">
    <img src="../../Images/img4.webp" alt="" class="cardio">
    <img src="../../Images/img5.webp" alt="">
    <img src="../../Images/img1.webp" alt="">
  </div>

  <div class="slogan">
    <h1>Shape Your Body!</h1><br>
    <span>in the most <h3>Luxurious</h3> gym in town.</span>
  </div>

  <footer class="nav-footer">
    <div class="follow_us">
      <h3>Follow us on</h3>
      <div class="insta">
        <i class="fa-brands fa-square-instagram fa-3x" id="insta"></i>
        <a style="text-decoration:none;" href="https://www.instagram.com/reel/CyFPB3YoEJy/?utm_source=ig_web_copy_link">Instagram</a>
      </div>
      <div class="facebook">
        <i class="fa-brands fa-facebook-f fa-2x" style="color: #316FF6;"></i>
        <a style="text-decoration:none;" href="https://www.facebook.com/KandreFitnessHub/">facebook</a>
      </div>
    </div>
    <div class="logo-img">
      <img src="../../Images/KFH.png" alt="" width="120px" height="50px" class="logo">
    </div>
    <div class="content">
      <a href="">Home</a>
      <a href="">Services</a>
      <a href="">AboutUs</a>
      <a href="">Contact</a>
    </div>
  </footer>
  <script src="../js/index.js" defer></script>
</body>

</html>