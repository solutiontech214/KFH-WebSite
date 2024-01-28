<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KFH</title>
  <link rel="stylesheet" href="../css/indexStyle.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background:whitesmoke;">

  <div class="preloader" id="preLoader"></div>

  <nav class="nav-bar">
    <div style="margin-left: 10px;">
      <img src="../../Images/KFH.png" width="120px" height="50px" class="logo">
    </div>
    <div class="items">
      <a href="#">Home</a>
      <div class="dropdown">
        <a href="#" class="dropbtn dropdown-toggle">Srevices</a>
        <div class="dropdown-content">
          <a href="#">Cardio center</a>
          <a href="#">Strength Training</a>
          <a href="#">Group Classes</a>
          <a href="#">Spa</a>
          <a href="#">Personal Training</a>
        </div>
      </div>
      <a href="#">AboutUs</a>
      <a href="">Contact</a>
    </div>
    <div class="login">
      <a href="../html/login.html"><button class="btn-login" id="login" type="button">Login</button></a>
    </div>
  </nav>

  <div class="img-container">
    <img class="mySlides" src="../../Images/gym4.jpg" alt="gym">
    <img class="mySlides" src="../../Images/gym2.jpg" alt="gym">
    <img class="mySlides" src="../../Images/gym3.jpg" alt="gym">
    <img class="mySlides" src="../../Images/gym5.jpg" alt="gym">
    <button class="prev-arrow" onclick="plusDivs(-1)">&#10094;</button>
    <button class="next-arrow" onclick="plusDivs(+1)">&#10095;</button>
  </div>

  <div class="containers">
    <div class="container1">
      <img src="../../Images/img4.webp" alt="cardio" class="cardio">
      <img src="../../Images/img3.webp" alt="">
      <img src="../../Images/img5.webp" alt="">
      <img src="../../Images/img2.webp" alt="">
      <img src="../../Images/img1.webp" alt="">
    </div>
  </div>

  <div class="get_more">
    <span>Click on <a href="">services</a> for more...</span>
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
        <a href="https://www.instagram.com/reel/CyFPB3YoEJy/?utm_source=ig_web_copy_link">Instagram</a>
      </div>
      <div class="facebook">
        <i class="fa-brands fa-facebook-f fa-2x" style="color: #316FF6;"></i>
        <a href="https://www.facebook.com/KandreFitnessHub/">facebook</a>
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
  <script src="../js/index.js"></script>
</body>

</html>