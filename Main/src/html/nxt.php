<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <h1>Redirecting to Login Page..</h1>
</body>
</html>
<script>
        // Delay the redirection for 3 seconds (3000 milliseconds)
        setTimeout(function() {
            window.location.href = 'login.php';
        }, 3000);
</script>