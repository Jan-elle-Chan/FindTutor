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
            <h3>Sign Up</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            <img src="images/pexels-erik-mclean-9258431.jpg" alt="Image of books">
          </section>

          <!-- Card 2-->
          <section class = "card">
            <h3>Sign up</h3>
           

            <form action="signup.php" method="POST">
            <label>First Name</label>  
            <input type="text" name="firstname">
            <label>Last Name</label>      
            <input type="text" name="lastname"></label>
            <label>Email</label>   
            <input type="text" name="email"></label>
            
                <button>Sign Up</button>
            </form>


          </section>
</div>
</main>


</body>
</html>