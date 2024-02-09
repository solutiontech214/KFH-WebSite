<?php
require('C:\xampp\htdocs\KFH-WebSite\Main\src\lib\Account_Existance.php');
$obj = new Account();
if (isset($_POST['submit'])) {
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $a_pass = $_POST['a_pass'];
    $c_pass = $_POST['c_pass'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>

    <div class="preloader1" id="preLoader1"></div>




    <div id="perent">
        <form class="signup" method="POST">
            <span>
                <a href="index.php"><i class="fa-solid fa-xmark" style="color:white;"></i></a>
                <h2>SignUp</h2>
            </span>
            <div class="inputs">
                <span>
                    <input type="text" placeholder="First Name" name="f_name" required>
                    <i class="fa-solid fa-user"></i>
                    <div class="error-msg">
                        <!-- error -->
                    </div>
                </span>
                <span>
                    <input type="text" placeholder="Last Name" name="l_name" required>
                    <i class="fa-solid fa-user"></i>
                    <div class="error-msg">
                    </div>
                </span>
                <span>
                    <input type="email" placeholder="Email" name="email" required>
                    <i class="fa fa-envelope icon"></i>
                    <div class="error-msg">
                        <!-- error -->
                    </div>
                </span>
                <span>
                    <input type="password" placeholder="Create Password" name="a_pass" id="passwordInput" required>
                    <i class="fa-solid fa-eye eye" onclick=" togglePassword()" style="cursor: pointer;"></i>
                    <div class="error-msg">
                        <!-- error -->

                        <strong><label><?php if (isset($_POST['submit']) && strlen($_POST['a_pass']) < 8) {
                                            echo "Password must be greater than 8 !!";
                                        } ?> </label></strong>
                    </div>
                </span>
                <span>
                    <input type="password" placeholder="Confirm Password" name="c_pass" id="recheckpassword" required>
                    <i class="fa-solid fa-lock"></i>
                    <div class="error-msg">
                        <!-- error -->
                        <strong><label><?php if (isset($_POST['submit']) && $_POST['a_pass'] != $_POST['c_pass']) {
                                            echo "Password isn't matches.!!";
                                        }
                                        ?></label></strong>
                    </div>
                </span>

            </div>
            <span class="haveaccount">
                <a href="login.php">Already have an account<i class="fa-solid fa-right-to-bracket"></i></a>
            </span>

            <div id="preloader">
                <p>Checking email account...</p>
            </div>

            <div class="signup-btn">
                <button type="submit" name="submit" id="signupButton">SignUp</button>
            </div>





            <div class="account-existance" style="margin-top:20px">

                <?php
                if (isset($_POST['submit'])) {

                    if ($res = $obj->is_account_exists($_POST['email'])) {




                        echo "Account Already Exist's";
                        usleep(1000000);
                        if (true) {

                            header("Location: login.php");
                        }
                        // Redirect to another page

                    } else {
                        $obj->create_account(
                            $_POST['f_name'],
                            $_POST['l_name'],
                            $_POST['email'],

                            $_POST['a_pass'],
                            $_POST['c_pass']
                        );
                    }
                }

                ?>



            </div>
            <hr width="90%" style="color: black; margin-top: 10px;">
            <div class="gym-name">
                <h3>@KANDRE'S FITNESS HUB</h3>
            </div>
        </form>
    </div>
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById("passwordInput");
            const eyeIcon = document.querySelector(".eye");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }

        let loader = document.getElementById("preLoader1")

        window.addEventListener("load", () => {
            loader.style.display = "none";
        });

        // Function to check the email account
        function checkEmailAccount() {
            // Change this to the email you want to check
            const emailToCheck = "example@example.com";

            // Check if the email account exists (this is just a simulation)
            const accountExists = true; // Change this to your actual check logic

            if (accountExists) {
                // Redirect to the login page if the account exists
                window.location.href = "login.html";
            } else {
                // Redirect to the signup page if the account doesn't exist
                window.location.href = "signup.html";
            }
        }

        // Add event listener to the signup button
        document.getElementById("signupButton").addEventListener("click", function() {
            // Display the preloader
            document.getElementById("preloader").style.display = "flex";

            // Simulate checking email account with a delay
            setTimeout(checkEmailAccount, 2000); // Simulating 2 seconds for checking (adjust as needed)
        });
    </script>
</body>

</html>