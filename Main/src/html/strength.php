<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Strength Training</title>
    <link rel="stylesheet" href="../css/strength.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

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
        <h1><i class="fa-solid fa-dumbbell fa-rotate-by" style="--fa-rotate-angle: 135deg;""></i> Strength Tranning</h1>
    </div>

    <div class=" head">
                <h2>"Power Up Your Fitness Journey: Strength Training Excellence at KFH Gym"</h2>
    </div>
    <div class="cont">
        <div class="card border border-black" style="width: 30rem;">
            <img src="../../Images/str.jpg" class="card-img-top" alt="...">
            <div class="card-body text-white bg-dark">
                <h4 class="card-title"> Benefits of Strength Training:</h4>
                <p class="card-text">
                    <li>Increased muscle strength and endurance.</li>
                    <li>Improved bone density and reduced risk of osteoporosis.</li>
                    <li>Enhanced metabolism and calorie burning, aiding in weight management.</li>
                    <li>Better posture and balance, reducing the risk of injuries in daily activities.</li>
                    <li>Boosted confidence and self-esteem.</li>
                </p>
            </div>
        </div>
        <div class="card border border-black" style="width: 30rem;">
            <img src="../../Images/push-up.jpg" class="card-img-top" alt="...">
            <div class="card-body text-white bg-dark">
                <h4 class="card-title">Basic Principles of Strength Training:</h4>
                <p class="card-text">
                    <li>Progressive Overload: Gradually increasing the weight or resistance to continue challenging the muscles.</li>
                    <li>Specificity: Tailoring exercises to target specific muscle groups or fitness goals.</li>
                    <li>Rest and Recovery: Allowing adequate rest between sessions for muscle repair and growth.</li>
                    <li>Variation: Incorporating different exercises, rep ranges, and techniques to prevent plateaus and keep workouts interesting.</li>
                </p>
            </div>
        </div>
        <div class="card border border-black" style="width: 30rem;">
            <img src="../../Images/st2.jpg" class="card-img-top" alt="...">
            <div class="card-body text-white bg-dark">
                <h4 class="card-title">Common Strength Training Exercises:</h4>
                <p class="card-text">
                    <li>Compound Movements: Squats, deadlifts, bench presses, and rows that target multiple muscle groups simultaneously.</li>
                    <li>Isolation Exercises: Bicep curls, tricep extensions, and calf raises that focus on specific muscle groups.</li>
                    <li>Bodyweight Exercises: Push-ups, pull-ups, and lunges that use your body weight for resistance.</li>
                </p>
            </div>
        </div>
        <div class="card border border-black" style="width: 30rem;">
            <img src="../../Images/squats.jpg" class="card-img-top" alt="...">
            <div class="card-body text-white bg-dark">
                <h4 class="card-title">Sample Workouts:</h4>
                <p class="card-text">
                    <li>Offer beginner, intermediate, and advanced workout routines targeting different muscle groups or fitness goals.</li>
                    <li>Include instructions on sets, repetitions, and rest periods for each exercise.</li>
                </p>
            </div>
        </div>
        <div class="card border border-black" style="width: 30rem;">
            <img src="../../Images/n.jpg" class="card-img-top" alt="...">
            <div class="card-body text-white bg-dark">
                <h4 class="card-title">Nutrition and Hydration:</h4>
                <p class="card-text">
                    <li>Highlight the role of proper nutrition and hydration in supporting strength training efforts, including adequate protein intake for muscle repair and carbohydrates for energy.</li>
                </p>
            </div>
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

            if (currentScrollPosition > 50) {
                navbar.classList.add('fixed-nav');
            } else {
                navbar.classList.remove('fixed-nav');
            }
        });
    </script>
</body>

</html>