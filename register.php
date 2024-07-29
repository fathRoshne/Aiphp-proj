<!DOCTYPE html>

<html lang="en">
<head>
  
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

  <style>
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
   





 
</head>
<body>
<!-- Add the Bootstrap CSS file -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Add the Bootstrap JS file (jQuery is required for Bootstrap JS) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
 
  
 
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
          <a class="dropdown-item" href="register.php">Register</a>
          <a class="dropdown-item" href="login.html">Login</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
 <br> 
 <div class="container-md text-center  mb-1 mt-5  border border-info border border-3"   style= "width: 430px ;background-color: rgb(153, 96, 222);border-radius: 50px;">
  
 <form id="registrationForm" class="text-center mb-4 container-md text-center mt-4 p-4 mb-4 border border-info"  style= "width: 450px ; background-color:whitesmoke;border-radius: 50px;" action="dbregister.php" method="POST">
      <h2 class="text-center mb-3 container-md text-center mt-1 hero-text">Lets Get Started!</h2>
      <div class="form-group">
        <label for="email"> </label>
        <input type="email" class="form-control text-center" id="email" name="email" placeholder="Enter email" required>
      </div>
      <div class="form-group">
        <label for="username"> </label>
        <input type="text" class="form-control text-center" id="username" name="username" placeholder="Enter username" required>
      </div>
      <div class="form-group">
        <label for="dob">Date of Birth:</label>
        <input type="date" class="form-control text-center" id="dob" name="dateOfBirth" required>
      </div><br>
      <div class="form-group">
        <select class="form-control text-center" id="gender" name="gender" required>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Register</button>
      <a href="login.php" class="left-align">Already Registered?</a>
    </form>
   
    

  <script>
  function hideAlertBox() {
    const alertBox = document.getElementById("alertbox");
    alertBox.style.display = "none";
  }
</script>
   
  </div>
  <?php

    if(isset($_GET['error'])) {
      echo('
       <div id="alertbox" class="alert alert-danger mt-3 text-center" role="alert">
          User with this email already exists
      </div>');
    }
    
    ?>
  

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  // Form validation using jQuery
 
</script>
 
  



 
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
  </html>

