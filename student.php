<?php
require 'includes/database-connection.php';             // Create PDO object
require 'includes/functions.php';                       // Functions 
$subject = $_POST["subject"];
$level = $_POST["level"];
$time = $_POST["time"];
$session = $_POST["session"];
$userId = 502;

$sql       = "SELECT first, last, level FROM student
              WHERE userId = '%$userId%';"; // SQL
$statement = $pdo->query($sql);                                // Run query
$tutors   = $statement->fetchAll();                           // Get data
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
          <h3>Tutors you may be interested in (<?php echo $_POST["subject"]; ?>
           , <?php echo $_POST["level"]; ?>, <?php echo $_POST["time"]; ?>, <?php echo $_POST["session"]; ?>)
           </h3>
          
            <div class = "bio-grid">
            <?php foreach ($tutors as $tutor) { ?>
              <h6><?= html_escape($tutor['first']) ?><?= html_escape($tutor['last']) ?></h6>
              <p>Current Level: <?= html_escape($tutor['rating']) ?></p>
              <button>Delete Student</button>
            <?php } ?>
            
            </div>
          
          </section>
    </div>
</main>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

var dropdown = document.getElementsByClassName("dropbtn");
  var i;
  
  for (i = 0; i <script dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
      }
    });
  }

</script>

</body>
</html>