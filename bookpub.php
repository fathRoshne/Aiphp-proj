 
<?php
    session_start();
    if(!isset($_SESSION['userloggedin'])) {
        header('Location:login.php');
        exit();
    }
?>





 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        img {
            max-width: 200px;
            display: block;
            margin: 20px auto;
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
        <a class="nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="service.html">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
       
    </ul>
  </div>
</nav>
 <br><br>
 <?php
if (isset($_GET['title']) && isset($_GET['author']) && isset($_GET['genre']) && isset($_GET['description']) && isset($_GET['cover'])) {
    $title = urldecode($_GET['title']);
    $author = urldecode($_GET['author']);
    $genre = urldecode($_GET['genre']);
    $description = urldecode($_GET['description']);
    $cover = urldecode($_GET['cover']);
    $email=$_SESSION['userloggedin'];

    
} else {
    echo "Book details are missing.";
    exit();
}
?>

<div class="container">
        <h1><?php echo htmlspecialchars($title); ?></h1>
        <p><strong>Author:</strong> <?php echo htmlspecialchars($author); ?></p>
        <p><strong>Genre:</strong> <?php echo htmlspecialchars($genre); ?></p>
        <p><strong>Description:</strong> <?php echo nl2br(htmlspecialchars($description)); ?></p>
        <img src="<?php echo htmlspecialchars($cover); ?>" alt="<?php echo htmlspecialchars($title); ?> cover">
         
        </div>
        
</body>
</html>
