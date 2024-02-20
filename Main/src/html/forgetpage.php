<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgetpass</title>
    <link rel="stylesheet" href="../css/forgetpass.css">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
  <div class="logo">
    <img src="../../Images/KFH.png" alt="logo" width="120px" height="50px">
  </div>

<div class="container">
    <form action="forget_password.php" method="post">
      <h2>Forget Password</h2>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <div class="error-msg">
        <span class="error">
          <!-- error -->
        </span>
        </div>
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>
</body>
</html>