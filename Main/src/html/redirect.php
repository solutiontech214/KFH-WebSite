<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting..</title>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500&display=swap" rel="stylesheet" />
    <style>
         body {
      margin: 0;
      padding: 0;
      background: #060606;
    }
    .body
    {
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    h1,h2{
      color: white;
      font-family: "Rajdhani", sans-serif;
      letter-spacing: 2px;
    }
    </style>
</head>
<body>
    <div class="body">
        <h1> For Sending Feedback Please Login First..</h1>
        <br>
        <h2>Redirecting to Login Page..</h2>
    </div>
    <script>
        // Delay the redirection for 3 seconds (3000 milliseconds)
        setTimeout(function() {
            window.location.href = 'login.php';
        }, 3000);
    </script>
</body>
</html>
