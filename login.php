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
            <h3>Welcome Back</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            <img src="images/pexels-erik-mclean-9258431.jpg" alt="Image of books">
          </section>

          <!-- Card 2-->
          <section class = "card">
            <h3>Log In</h3>
           

            <form action="login.php" method="POST">
            <label>Email</label>  
            <input type="text" name="email"></label>
            <label>Password</label>  
            <input type="text" name="password"></label>
                <button>Log In</button>
                <a href="signup.php">Not registered, sign up</a>
            </form>


          </section>
</div>
</main>




</body>
</html>