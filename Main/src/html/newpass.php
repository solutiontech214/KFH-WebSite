<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500&display=swap" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <style>
        * {
            letter-spacing: 1px;
        }
        body {
            background: #222121;
            color: white;
            font-family: "Rajdhani", sans-serif;
        }

        .logo {
            width: 100%;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 100%;
            height: 60vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .c {
            width: 800px;
        }
        .forms-group input {
            font-size: 26px;
            font-weight: 500;
            color: #000;
        }

        ._btn {
            background: #bb0120;
            color: black;
            font-size: 16px;
            font-weight: 500;
            border: 0;
            box-shadow: 0 0 5px black;
        }
        ._btn:hover {
            background: #000;
            color: rgb(255, 255, 255);
        }
        i {
            position: absolute;
            margin-top: -25px;
            margin-left: 340px;
        }
    </style>
</head>

<body>

    <div class="logo">
        <img src="../../Images/KFH.png" alt="logo" width="120px" height="50px">
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 c">
                <h2 class="text-center mb-4">New User Password Setup</h2>
                <form>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password"
                            style="font-size: 16px; font-weight: 500; color: #000;" />
                        <i class="fa-solid fa-eye eye" onclick=" togglePasswordVisibility()"
                            style="cursor: pointer; color: rgb(0, 0, 0)"></i>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password"
                            style="font-size: 16px; font-weight: 500; color: #000;" />
                        <i class="fa-solid fa-lock" style="cursor: pointer; color: rgb(0, 0, 0)"></i>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block _btn">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById("password");
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
    </script>
</body>

</html>