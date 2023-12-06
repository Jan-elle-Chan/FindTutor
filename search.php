<?php
require 'includes/database-connection.php'; // Create PDO object
require 'includes/functions.php'; // Functions
$subject = $_POST["subject"];
$level = $_POST["level"];
$time = $_POST["time"];
$session = $_POST["session"];

$sql = "SELECT first, last, rating, location, time, subject, level FROM tutor
              WHERE subject LIKE '%$subject%' AND level LIKE '%$level%';"; // SQL
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
      <div class = "content">
        <!-- Card-->
          <section class = "card">
            <h3>Tutors you may be interested in (<?php echo $_POST["subject"]; ?>
            , <?php echo $_POST["level"]; ?>, <?php echo $_POST["time"]; ?>, <?php echo $_POST["session"]; ?>)
            </h3>

            <div class = "bio-grid">
              <?php foreach ($tutors as $tutor) {?>
                <h6><?=html_escape($tutor['first'])?><?=html_escape($tutor['last'])?></h6>
                <p>I am located in <?=html_escape($tutor['location'])?>. tutoring subjects <?=html_escape($tutor['subject'])?> at <?=html_escape($tutor['level'])?> level. <br>I have a <?=html_escape($tutor['rating'])?> star rating.</p>
                <button>Book Now</button>
              <?php }?>
            </div>
          </section>
            <?php
              /*//START SESSION
              session_start();

              print_r($_SESSION);
              var_dump($_SESSION);*/
            ?>
      </div>
    </main>
  </body>
</html>