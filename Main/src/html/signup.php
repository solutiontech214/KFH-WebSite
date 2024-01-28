<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>

    <div class="preloader" id="preLoader"></div>
    
    <div id="perent">
        <form action="#" class="signup">
            <span>
                <a href="index.html"><i class="fa-solid fa-xmark"></i></a>
                <h1>SignUp</h1>
            </span>
            <div class="inputs">
                <span>
                    <input type="text" placeholder="First Name" required>
                    <i class="fa-solid fa-user"></i>
                </span>
                <span>
                    <input type="text" placeholder="Last Name" required>
                    <i class="fa-solid fa-user"></i>
                </span>
                <span>
                    <input type="email" placeholder="Email" required>
                    <i class="fa fa-envelope icon"></i>
                </span>
                <span>
                    <input type="password" placeholder="Password" id="passwordInput" required>
                    <i class="fa-solid fa-eye eye" onclick=" togglePassword()" style="cursor: pointer;"></i>
                </span>
                <span>
                    <input type="password" placeholder="Confirm Password" id="recheckpassword" required>
                    <i class="fa-solid fa-lock"></i>
                </span>
            </div>
            <span class="haveaccount">
                <a href="login.html">Already have an account</a>
                <i class="fa-solid fa-right-to-bracket"></i>
            </span>
            <div class="signup-btn">
                <button type="submit">SignUp</button>
            </div>
            <hr width="90%" style="color: black; margin-top: 34px;">
            <div class="gym-name">
                <h3>@KANDHRE'S FITNESS HUB</h3>
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

        // let loader = document.getElementById("preLoader")

        // window.addEventListener("load", () => {
        //     loader.style.display = "none";
        // });

    </script>
</body>

</html>