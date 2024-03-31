<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Personal Trainers</title>
  <link rel="stylesheet" href="../css/personal.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
  <nav>
    <div class="logo">
      <a href="./index.php"><img src="./../../Images/KFH.png" alt="" width="120px" height="50px" /></a>
    </div>
    <div class="items">
      <a href="./index.php">Home</a>
      <a href="./aboutus.php">AboutUs</a>
      <a href="./service.php">Services</a>
      <a href="./contact.php" class="_contact">Contact</a>
    </div>
  </nav>

  <!-- Header Section -->
  <header class="header-section">
    <h1 class="text-center" style="margin-top: 10vh">
      Personal Training at <b style="color: #eb003b">KFH</b> Gym
    </h1>
    <div class="container">
      <img src="../../Images/p-trainer.png" class="border border-1 border-black" width="60%" height="500px" />
    </div>
  </header>

  <!-- Introduction to Personal Training -->
  <section id="introduction" class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-title">
            Welcome to Personal Training at
            <b style="color: #eb003b">KFH</b> Gym
          </h2>
          <p class="section-text fs-5">
            At <b style="color: #eb003b">KFH</b> Gym, we believe that
            personalized training is the key to unlocking your full fitness
            potential. Our dedicated team of certified personal trainers is
            committed to helping you achieve your goals through customized
            workout plans tailored to your individual needs and preferences.
          </p>
          <p class="section-text fs-5">
            Whether you're looking to lose weight, build muscle, improve
            athletic performance, or simply adopt a healthier lifestyle, our
            personal training services are designed to empower you on your
            fitness journey. With personalized attention and expert guidance,
            you'll receive the support and motivation you need to succeed.
          </p>
          <p class="section-text fs-5">
            Our experienced trainers possess a wealth of knowledge and
            expertise in various fitness disciplines, ensuring that you
            receive the highest quality instruction and guidance. From
            beginners to seasoned athletes, our trainers are here to inspire,
            motivate, and challenge you to reach new heights.
          </p>
          <p class="section-text fs-5 fw-bold">
            Discover the transformative power of personalized training at KFH
            Gym and take the first step towards achieving your fitness goals
            today!
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Personal Training Packages -->
  <section id="packages" class="section bg-light">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <h2 class="section-title" style="margin-top: 20px">
          Personal Training Packages
        </h2>
        <p class="section-text fs-5">
          Choose the package that best fits your fitness goals and schedule.
          Our personal training options offer flexibility, expert guidance,
          and personalized attention to help you achieve maximum results.
        </p>
      </div>
    </div>
    <div class="container">
      <!-- Personal Training Package Cards -->
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4 border border-1 border-success">
            <div class="card-body">
              <h3 class="card-title">Starter Package</h3>
              <p class="card-text">
                Ideal for beginners or those looking to kickstart their
                fitness journey.
              </p>
              <ul class="list-unstyled">
                <li><b>Duration:</b> 4 months</li>
                <li><b>Sessions:</b> 48 sessions (3 sessions per week)</li>
                <li><b>Price:</b> ₹4,000</li>
                <li><b>Includes:</b></li>
                <li>- Personalized workout plans</li>
                <li>- Nutritional guidance</li>
                <li>- Progress tracking</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Add more package cards here -->

        <div class="col-lg-4">
          <div class="card mb-4 border border-1 border-warning">
            <div class="card-body">
              <h3 class="card-title">Advanced Package</h3>
              <p class="card-text">
                Designed for experienced individuals seeking targeted training
                and advanced techniques.
              </p>
              <ul class="list-unstyled">
                <li><b>Duration:</b> 8 months</li>
                <li><b>Sessions:</b> 96 sessions (3 sessions per week)</li>
                <li><b>Price:</b> ₹8,000</li>
                <li><b>Includes:</b></li>
                <li>- Customized workout routines</li>
                <li>- Meal planning</li>
                <li>- Performance assessments</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card mb-4 border border-1 border-danger">
            <div class="card-body">
              <h3 class="card-title">Premium Package</h3>
              <p class="card-text">
                Our most comprehensive package for serious fitness
                enthusiasts.
              </p>
              <ul class="list-unstyled">
                <li><b>Duration:</b> 12 months</li>
                <li><b>Sessions:</b> 144 sessions (3 sessions per week)</li>
                <li><b>Price:</b> ₹12,000</li>
                <li><b>Includes:</b></li>
                <li>
                  - One-on-one personal training sessions with a certified
                  trainer
                </li>
                <li>- In-depth fitness assessments & progress tracking</li>
                <li>- Nutrition coaching and meal planning</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Meet Our Trainers -->
  <section id="trainers" class="section">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">Meet Our Trainers</h2>
        <p class="section-text">
          Our team of certified personal trainers is dedicated to helping you
          reach your fitness goals.
        </p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <img src="../../Images/traners.jpg" alt="" height="600px" />
      </div>
    </div>
  </section>

  <!-- FAQs (Frequently Asked Questions) -->
  <section id="faqs" class="section">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">FAQs (Frequently Asked Questions)</h2>
      </div>
    </div>
    <div class="container">
      <div class="col">
        <div class="col-lg-12">
          <div class="accordion" id="faqAccordion">
            <!-- FAQ 1 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  How long is each personal training session?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Each personal training session typically lasts for 60
                  minutes. However, the duration may vary depending on the
                  specific goals and needs of the client.
                </div>
              </div>
            </div>
            <!-- FAQ 2 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  What qualifications do your trainers have?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Our trainers are certified professionals with qualifications
                  from reputable fitness organizations. They have expertise in
                  various areas of fitness and undergo continuous training to
                  stay updated with the latest industry standards.
                </div>
              </div>
            </div>
            <!-- FAQ 3 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  How much does personal training cost?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  The cost of personal training varies depending on the
                  package you choose, the duration of the program, and
                  additional services included. Please refer to our pricing
                  section or contact us for more information.
                </div>
              </div>
            </div>
            <!-- FAQ 4 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Can I schedule personal training sessions at flexible times?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes, we offer flexible scheduling options to accommodate
                  your busy lifestyle. Our trainers will work with you to find
                  convenient time slots for your sessions.
                </div>
              </div>
            </div>
            <!-- Add more FAQs as needed -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section id="cta" class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-title">Ready to Start Your Fitness Journey?</h2>
          <p class="section-text">
            Book a personal training session today and take the first step
            towards achieving your fitness goals.
          </p>
          <div class="mt-4">
            <a href="./contact.php" class="btn btn-outline-primary btn-lg">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--footer -->
  <footer class="_footer">
    <div class="links">
      <a href="https://www.facebook.com/KandreFitnessHub/" target="_blank">
        <div class="media facebook">
          <i class="fa-brands fa-facebook-f" style="color: #316ff6"></i>
        </div>
      </a>
      <a href="https://www.instagram.com/reel/CyFPB3YoEJy/?utm_source=ig_web_copy_link" target="_blank">
        <div class="media insta">
          <i class="fa-brands fa-instagram" style="color: #eb003b"></i>
        </div>
      </a>
    </div>
    <div class="_info">
      <a href="#">Kandre's Fitness Hub, Third floor,Mhetre Tower, Vishwakaran Park,Near
        Aasara Bridge, Jule Solapur,Solapur, 413004</a>
    </div>
    <div class="contact">
      <a href=""><i class="fa-solid fa-phone"></i> +91 70226 69007</a>
      <a href=""><i class="fa-solid fa-envelope"></i> kandrefitnesshub@gmail.com</a>
    </div>
    <div class="_logo">
      <div>
        <a href="./index.php"><img src="../../Images/KFH.png" alt="" width="125px" height="50px" /></a>
      </div>
    </div>
    <div class="copyright">
      <p>@copyright kandresfitnesshub.com</p>
    </div>
  </footer>

  <!-- Include Bootstrap JavaScript library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JavaScript code for slide control -->
  <script>
    $(document).ready(function() {
      // Previous slide button click event
      $(".carousel-control-prev").click(function() {
        $("#carouselExampleControls").carousel("prev");
      });

      // Next slide button click event
      $(".carousel-control-next").click(function() {
        $("#carouselExampleControls").carousel("next");
      });
    });
  </script>
</body>

</html>