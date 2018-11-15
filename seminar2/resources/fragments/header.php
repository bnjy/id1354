<?php
session_start();
?>

<div class ="head">
    <div class="nav-container">
      <div class="navbar">
        <a class="active" href="index.php">Home</a>
        <a href="calendar.php">Calendar</a>
        <a href="meatballs.php">Meatballs</a>
        <a href="pancakes.php">Pancakes</a>
        <a href="login.php">Login</a>
      </div>

      <div>
        <form action="resources/includes/login.php" method="post">
          <input type="text" name="usr" placeholder="Username">
          <input type="password" name="pwd" placeholder="Password">
          <button type="submit" name="login-submit">Login</button>
        </form>
        <a href="signup.php">Signup</a>
        <form action="resources/includes/logout.php" method="post">
          <button type="submit" name="logout-submit">Logout</button>
        </form>
      </div>
    </div>
</div>
