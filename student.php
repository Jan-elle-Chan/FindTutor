<?php
require 'includes/database-connection.php';             // Create PDO object
require 'includes/functions.php';                       // Functions 
$sql       = "SELECT first, last, currentLevel FROM student
              WHERE userId ='502';"; // SQL
$statement = $pdo->query($sql);                                // Run query
$students   = $statement->fetchAll();                           // Get data
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find a Tutor</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
        <h1>Find a Tutor</h1>
    </header>
  <!-- Navigation-->
  <nav class="topnav" id="myTopnav">
    <a class="active" href="index.php">Home</a>
    <div class="dropdown">
      <div class="dropbtn">My Profile</div>
    <div class="dropdown-container">
      <a href="student.php">Students</a>
      <a href="history.php">History</a>
      <a href="report.php">Reports</a>
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
            <h3>Your students</h3>
            
              <div class = "bio-grid">
              <?php foreach ($students as $student) { ?>
                <h6><?= html_escape($student['first'])?>&nbsp;<?= html_escape($student['last']) ?></h6>
                <p>Current Level: <?= html_escape($student['currentLevel']) ?></p>
                <button>Delete</button>
              <?php } ?>
              
              </div>
            
            </section>
      </div>
  </main>



</body>
</html>