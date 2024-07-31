<?php
    session_start();
    if(!isset($_SESSION['userloggedin'])) {
        header('Location: login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Book - Book Creating & Publishing</title>
    <style>
        .hero-text {
    text-align: center;
     color: #333;
    font-size: 50px;
    margin-top: 1vh;
    font-weight:  200;}
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
       
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
        }
        input, textarea, select {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px;
            border: none;
            border-radius: 4px;
            background: #333;
            color: #fff;
            cursor: pointer;
        }
        button:hover {
            background: #555;
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
 

    <div class="container">
        <h1 class="hero-text">Create a Book</h1>
        <form action="dbbook.php" method="POST" enctype="multipart/form-data">
            <label for="title">Book Title</label>
            <input type="text" id="title" name="title" required>

            <label for="author">Author</label>
            <input type="text" id="author" name="author" required>

            <label for="genre">Genre</label>
            <select id="genre" name="genre" required>
                <option value="Romance">Romance</option>
                <option value="Comedy">Comedy</option>
                <option value="Mystery">Mystery</option>
                <option value="Fantasy" >Fantasy</option>
                <option value="Horror">Horror</option>
                <option value="Thriller">Thriller</option>
                <option value="Biography">Biography</option>
                <option value="Self-help">Self-help</option>
                <option value="Other">Other</option>
            </select>

            <label for="description">Book Description</label>
            <textarea id="description" name="description" rows="6" required></textarea>

            <label for="cover">Book Cover</label>
            <input type="file" id="cover" name="cover" accept="image/*" required>

            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>

 
</html>