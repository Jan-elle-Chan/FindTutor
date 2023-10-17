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
<section id="animations" class = "animations">
    <div class = "content page-grid">
        
          <!-- Card 1-->
          <section class = "card">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
          </section>

          <!-- Card 2-->
          <section class = "card">
            <h3>Form</h3>
           

            <form action="collecting-form-data.php" method="POST">
            <label>Name:   </label>  <input type="text" name="name">
            <label>Age:      <input type="text" name="age"></label>
            <label>Email:    <input type="text" name="email"></label>
            <label>Password: <input type="password" name="pwd"></label>
            <label>Bio:      <textarea name="bio"></textarea></label>
            <label>Contact preference:
                <select name="preferences">
                <option value="email">Email</option>
                <option value="phone">Phone</option>
                </select></label>
            <p>Rating: 
                1 <input type="radio" name="rating" value="1">
                2 <input type="radio" name="rating" value="2">
                3 <input type="radio" name="rating" value="3"></p>
            <p><input type="checkbox" name="terms" value="true"> 
            I agree to the terms and conditions.</p>
            <p><input type="submit" value="Save"></p>
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