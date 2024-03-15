<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>service</title>
    <link rel="stylesheet" href="../css/services.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav>
        <div class="logo">
            <a href="./index.php"><img src="../../Images/KFH.png" alt="" width="120px" height="50px"></a>
        </div>
        <div class="items">
            <a href="./index.php">Home</a>
            <a href="./aboutus.php">AboutUs</a>
            <a href="./aboutus.php">Classes</a>
            <a href="./contact.php" class="_contact">Contact</a>
        </div>
    </nav>




    <div class="head">
        <h1><b>Our Services</b></h1>
    </div>

    <div class="service">
        <div>
            <i class="fa-solid fa-1 fa-2x"></i>
            <a href="">
                <div class="_card">
                    <img src="../../Images/cardio2.JPG" alt="" width="100%" height="220px">
                    <div class="span">
                        <h1><b>Cardio center</b></h1>
                        <p>Cardio section for weight loss, to improve stamina and cardiovascular health.</p>
                    </div>
                </div>
            </a>
        </div>
        <div>
            <i class="fa-solid fa-2 fa-2x"></i>
            <a href="">
                <div class="_card">
                    <img src="../../Images/stringth.JPG" alt="" width="100%" height="220px">
                    <div class="span">
                        <h1><b>Strength Training</b></h1>
                        <p>A well equipped strength training and free workout section which for specialized training. </p>
                    </div>
                </div>
            </a>
        </div>
        <div>
            <i class="fa-solid fa-3 fa-2x"></i>
            <a href="./classes.php">
                <div class="_card">
                    <img src="../../Images/classes.jpeg" alt="" width="100%" height="220px">
                    <div class="span">
                        <h1><b>Group Classes</b></h1>
                        <p>Yoga ,Zumba, aerobics, circuit trainig and other workout classes are scheduled and conducted.</p>
                    </div>
                </div>
            </a>
        </div>
        <div>
            <i class="fa-solid fa-4 fa-2x"></i>
            <a href="">
                <div class="_card">
                    <img src="../../Images/Spa2.jpg" alt="" width="100%" height="220px">
                    <div class="span">
                        <h1><b>Spa</b></h1>
                        <p>Relaxing spa that will rejuvinate your body and mind which help you relax peacefully.</p>
                    </div>
                </div>
            </a>
        </div>
        <div>
            <i class="fa-solid fa-5 fa-2x"></i>
            <a href="">
                <div class="_card">
                    <img src="../../Images/tranier.jpeg" alt="" width="100%" height="220px">
                    <div class="span">
                        <h1><b>Personal Training</b></h1>
                        <p>Professional trainers create personalized workout plans and guide and motivate you.</p>
                    </div>
                </div>
            </a>
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
            <a href=""><i class="fa-solid fa-phone"></i>+91 70226 69007</a>
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

            if (currentScrollPosition > 150) {
                navbar.classList.add('fixed-nav');
            } else {
                navbar.classList.remove('fixed-nav');
            }
        });
    </script>

</body>

</html>