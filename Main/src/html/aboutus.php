<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AboutUs</title>
    <link rel="stylesheet" href="../css/aboutus.css" />
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
            <a href="./classes.php">Classes</a>
            <a href="./service.php">Services</a>
            <a href="./contact.php" class="_contact">Contact</a>
        </div>
    </nav>
    <div class="intro">
        <h1>AboutUs</h1>
    </div>







    <div class="container">
        <div class="cont">
            <div class="img-cont">
                <img src="../../Images/img9.jpg" alt="" width="500px" height="400px" />
            </div>
            <h1>KFH Now in Solapur!</h1>
        </div>
        <div class="aboutus">
            <p>
                Kandre's Fitness Hub, which has been operating in the fitness industry for over 9 years with great success in Pandharpur, has now expanded to Solapur.
            </p>
            <p>
                At Kandre's Fitness Hub we aim to create a healthy and fun environment
                for our clients and team to deliver positive results for the success
                of our staff and business. Team members are hand picked for their
                ability to provide excellent service and capabilities to handle
                responsibilities professionally.
            </p>
        </div>
    </div>


























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