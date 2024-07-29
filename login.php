<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css">
  <style>
    .password-toggle {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
    }
    
    body {
      background-image: url( images/backgroundd.png);
      background-repeat: no-repeat;
      background-size: cover;
    }
    
    .form-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f9f9f9;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .hero-text {
    text-align: center;
     color: #333;
    font-size: 50px;
    margin-top: 1vh;
    font-weight: 120;
   } 
  </style>
  </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="images/fav/favicon-32x32.png" alt="logo"></a><a class="navbar-brand" href="#">MyStoryRealm</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Account
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="register.html">Register</a>
                <a class="dropdown-item" href="login.html">Login</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
       <br><br>
       <div class="container-md text-center  mb-1 mt-5  border border-info border border-3"   style= "width: 430px ;background-color: rgb(153, 96, 222);border-radius: 50px;">
        <form id="registrationForm" class="text-center mb-4 container-md text-center mt-4 p-4 mb-4 border border-info"  style= "width: 450px ; background-color:whitesmoke;border-radius: 50px;" action="dblogin.php" method="POST">
          <h2 class="text-center mb-3 container-md text-center mt-1 hero-text">Sign In!</h2>
    <div class="form-group">
      <label for="email"></label>
      <input type="email " class="form-control text-center" id="email" name= "email" placeholder="Enter email" required>
    </div>
    <div class="form-group">
      <label for="password"></label>
      <div class="input-group">
        <input type="password" class="form-control text-center" id="password" name="pass" placeholder="Enter password" required>
        <div class="password-toggle">
          <i class="fas fa-eye" id="togglePassword"></i>
        </div>
      </div>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="rememberMe">
      <label class="form-check-label" for="rememberMe">Remember Me</label>
    </div>
    <a href="register.html" class="float-right">Forgot Password?</a>
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>
<?php

if(isset($_GET['error'])) {
  echo('
   <div id="alertbox" class="alert alert-danger mt-3" style="height:50px;  text-align:center; align:center;" role="alert">
      Email or Password is incorrect
  </div>');
}

?>
  
   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function() {
    $('#togglePassword').click(function() {
      var passwordInput = $('#password');
      if (passwordInput.attr('type') === 'password') {
        passwordInput.attr('type', 'text');
        $(this).addClass('fa-eye-slash').removeClass('fa-eye');
      } else {
        passwordInput.attr('type', 'password');
        $(this).addClass('fa-eye').removeClass('fa-eye-slash');
      }
    });
  });
</script>
</body>
</html>