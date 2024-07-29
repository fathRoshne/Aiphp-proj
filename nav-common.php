<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="images/fav/favicon-32x32.png" alt="logo"></a><a class="navbar-brand" href="#">MyStoryRealm</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>  <div class="collapse navbar-collapse" id="navbarNav">
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <?php
      if(basename($_SERVER['PHP_SELF']) === 'index.php') {
         
      }else{
          echo ' <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>';
      }
  ?>
 
  
  
        
</ul>
<form class="d-flex" role="search">
<?php 
      if(basename($_SERVER['PHP_SELF']) === 'register.php') {
          echo'<a class="btn btn-success" href="register.php">Register</a>&ensp;';
      }else{
          echo'<a class="btn btn-outline-success" href="register.php">Register</a>&ensp;';
      }
  ?>

  <?php 
      if(basename($_SERVER['PHP_SELF']) === 'login.php') {
          echo'<a class="btn btn-primary" href="login.php">Login</a>';
      }else{
          echo'<a class="btn btn-outline-primary" href="login.php">Login</a>';
      }
  ?>
  
  <ul class="navbar-nav ml-auto">
     
      <li class="nav-item">
        <a class="nav-link" href="about.html">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="service.html">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact</a>
      </li>
       
       
    </ul>
</form>
    </div>
  </div>
</nav>