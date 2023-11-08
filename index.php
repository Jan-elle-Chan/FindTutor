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
            <label for="subject">Level</label>
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