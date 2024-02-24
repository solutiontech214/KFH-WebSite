<?php
session_start();


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP</title>
    <!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500&display=swap" rel="stylesheet">

<style>
  *{
    font-family: "Rajdhani",sans-serif;
    letter-spacing: 2px;
  }
  body{
    margin: 0;
    padding: 0;
    background: #222121;
  }
  .logo{
    width: 100%;
    height: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .container{
    width: 100%;
    height: 60vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .card{
    box-shadow: 0 0 0 0.1px rgb(95, 91, 91) ;
    width: 500px;
    background: transparent;
    color: white;
  }
  .btn1{
    background: #b00303;
    border: 0;
    color: black;
    font-weight: 500;
    box-shadow: 0 0 10px black;
  }
  .btn1:hover{
    background: #000;
    color: white;
  }
  .btn1:active{
    border: 0;
    background-color: #000;
  }
  .alert {
            padding: 15px;
           /* Green color */
           
            margin-bottom: 150px;
            font-size: larger;
            display: flex;
            width:auto;
            margin-left:80px;
            margin-right:80px;
        }
        .error
        {
          background-color: red !important;
          color:black!important;
        }
        .success{
          background-color: #4CAF50 !important;
color:white !important;
        }
</style>
</head>
<body>

  <div class="logo">
    <img src="../../Images/KFH.png" alt="logo" width="120px" height="50px">
  </div>

  <div class="container">
    <div class="card">
      <div class="card-header">
      
      <br>
      <br>
        <h4>OTP Verification</h4>
      </div>
      <div class="card-body">
        <form id="otpForm" method="POST">
          <div class="form-group">
            <label for="otpInput">Enter OTP:</label>
            <input type="text" class="form-control" id="otpInput" name="otpInput" required>
           
          </div>
          <input type="submit" name="submit" class="btn btn-primary btn1" value="Verify OTP">
        </form>
      </div>
    </div>
  </div>

  <?php  if(!isset($_POST['submit']))
  {
      ?>
    <span class="alert success"><strong>
      <?php echo  "We Just Sent an OTP to :".$_SESSION['otp_mail']." PLease Check ..."; 
      ?>
      </strong>
      </span>
      <?php
    }else if(isset($_POST['submit']) && ($_POST['otpInput']==$_SESSION['otp']))
    {
      ?>
      <span class="alert success"><strong>
        <?php
      echo "You are Verified by Our System.. 😀";

      ?>
      <script>
  // Delay the redirection for 3 seconds (3000 milliseconds)
  setTimeout(function() {
    window.location.href = "updatepass.php";
  }, 3000);
</script>
</strong>
      </span>
      <?php
    }else if(isset($_POST['submit']) && ($_POST['otpInput']!=$_SESSION['otp']))
    {

    ?>
    <span class="alert error"><strong>
      <?php
    echo "Oop's..! Otp isn's matches with that we have Sent..!";
    ?>
    </strong>
    </span>
    <?php
      
    }
    ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>