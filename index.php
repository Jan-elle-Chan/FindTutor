<?php
// (A) ERROR REPORTING LEVEL
// https://www.php.net/manual/en/errorfunc.constants.php
error_reporting(E_ALL & ~E_NOTICE); // ALL EXCEPT NOTICES
// error_reporting(E_ALL); // ALL KINDS OF ERROR
// error_reporting(0); // NO ERROR REPORTING

// (B) ERROR LOG
ini_set("log_errors", 1); // SAVE ERROR TO LOG FILE
ini_set("error_log", __DIR__ . DIRECTORY_SEPARATOR . "error.log"); // LOG FILE

// (C) DISPLAY ERROR MESSAGES
ini_set("display_errors", 1);
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
    <!-- Nav-->
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
      <div class = "content page-grid">

          <!-- Card 1-->
          <section class = "card">
            <h3>About Us</h3>
            <p>Welcome to Find a Tutor. For over 10 years we have been connecting learners with great tutors. Our tutors undergo a rigorous screening process to ensure learners have the best learning experience possible.</p>
            <p>To get started, simply select your subject, level, time and session type (online or in-person)</p>
          </section>

          <!-- Card 2-->
          <section class = "card">
            <h3>Find a tutor now!</h3>
            <p> Complete the form, click Submit</p>

            <form action="search.php" method="POST">
            <label for="subject">Subject</label>
            <select name="subject" id="subject">
              <option value="math">Math</option>
              <option value="english">English</option>
              <option value="french">French</option>
              <option value="science">Science</option>
              <option value="history">History</option>
              <option value="computer">Computer Studies</option>
            </select>
            <label for="level">Level</label>
            <select name="level" id="level">
              <option value="elementary">Elementary</option>
              <option value="secondary">Secondary</option>
              <option value="tertiary">Tertiary</option>
            </select>
            <label for="time">Time</label>
            <select name="time" id="time">
              <option value="morning">Morning</option>
              <option value="afternoon">Afternoon</option>
              <option value="evening">Evening</option>
              <option value="night">Night</option>
            </select>

            <label for="session">Session</label>
            <select name="session" id="session">
              <option value="person">In-Person</option>
              <option value="online">Online</option>
            </select>

                <button onclick="window.location.href='search.php';">Submit</button>
            </form>


          </section>
      </div>
    </main>
  </body>
</html>
