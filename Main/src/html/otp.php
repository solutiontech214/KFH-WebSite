<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</style>
</head>
<body>

  <div class="logo">
    <img src="../../Images/KFH.png" alt="logo" width="120px" height="50px">
  </div>

  <div class="container">
    <div class="card">
      <div class="card-header">
        <h4>OTP Verification</h4>
      </div>
      <div class="card-body">
        <form id="otpForm">
          <div class="form-group">
            <label for="otpInput">Enter OTP:</label>
            <input type="text" class="form-control" id="otpInput" name="otpInput" required>
          </div>
          <button type="submit" class="btn btn-primary btn1">Verify OTP</button>
        </form>
      </div>
    </div>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function() {
    // Handle form submission
    $('#otpForm').submit(function(event) {
      event.preventDefault(); // Prevent the form from submitting normally
      // Add your OTP verification logic here
    });
  });
</script>

</body>
</html>