<?php
require 'includes/database-connection.php'; // Create PDO object
require 'includes/functions.php'; // Functions
$sql = "SELECT first, last FROM tutor
              WHERE subject LIKE '%Mathematics%' AND level LIKE '%Secondary%';"; // SQL
$statement = $pdo->query($sql); // Run query
$tutors = $statement->fetchAll(); // Get data
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find a Tutor</title>
    <link rel="stylesheet" href="style.css">
    <script src="app.js"></script>
  </head>
  <body>
<header>
    <h1>Find a Tutor</h1>
</header>

<nav class="topnav" id="myTopnav">
  <a class="active" href="index.php">Home</a>
  <div class="dropdown">
    <div class="dropbtn">My Profile</div>
      <div class="dropdown-container">
        <a href="student.php">Students</a>
        <a href="history.php">History</a>
      </div>
    </div>
  <a href="login.php">Login</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</nav>

<main>
  <section>
    <div class = "content">
      <!-- Card-->
          <section class = "card">
            <h3>We are currently unable to display your search history</h3>
      </div>
  </section>
</main>
</body>
</html>