<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .screen {
            height: auto;
            width: auto;
        }
    </style>
</head>
<body>
    <div class="screen">
        <h1>It seems like your account already exists...!!<br> We are redirecting to the login page...</h1>
    </div>

    <script>
        // Delay the redirection for 3 seconds (3000 milliseconds)
        setTimeout(function() {
            window.location.href = 'login.php';
        }, 3000);
    </script>
</body>
</html>