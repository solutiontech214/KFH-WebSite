<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
    <link rel="stylesheet" href="../css/classes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="logo">
            <a href="./index.php"><img src="./../../Images/KFH.png" alt="" width="120px" height="50px"></a>
        </div>
        <div class="items">
            <a href="./index.php">Home</a>
            <a href="./aboutus.php">AboutUs</a>
            <a href="./service.php">Services</a>
            <a href="./contact.php" class="_contact">Contact</a>
        </div>
    </nav>
    <div class="intro">
        <h1>Our Classes and Programs </h1>
    </div>
    <div class="container">
        <div class="cont c1">
            <img src="../../Images/yoga.jpeg" alt="" width="450px" height="450px">
            <h2>Yoga Classes</h2>
        </div>
        <div class="cont c2">
            <img src="../../Images/zumba2.jpg" alt="" width="450px" height="450px">
            <h2>Zumba Classes</h2>
        </div>
        <div class="cont c3">
            <img src="../../Images/airobics.jpeg" alt="" width="450px" height="450px">
            <h2>Airobics</h2>
        </div>
        <div class="cont c4">
            <img src="../../Images/circuit.jpeg" alt="" width="450px" height="450px">
            <h2>Circuit Traning</h2>
        </div>
    </div>
    <!--footer -->
    <footer class="_footer">
        <div class="links">
            <div class=" media facebook">
                <a href=""><i class="fa-brands fa-facebook-f" style="color: #316FF6;"></i></a>
            </div>
            <div class=" media insta">
                <a href=""><i class="fa-brands fa-instagram" style="color: #eb003b;"></i></a>
            </div>
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
    <script>
        let navbar = document.querySelector('nav');
        let lastScrollPosition = 0;

        window.addEventListener('scroll', function() {
            let currentScrollPosition = window.scrollY;

            if (currentScrollPosition > 250) {
                navbar.classList.add('fixed-nav');
            } else {
                navbar.classList.remove('fixed-nav');
            }
        });
    </script>
</body>

</html>