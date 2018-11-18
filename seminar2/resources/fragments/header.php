<?php
session_start();
?>
<div class ="head">
    <div class="nav-container">
      <div class="navbar">
        <a href="index.php">Home</a>
        <a href="calendar.php">Calendar</a>
        <a href="meatballs.php">Meatballs</a>
        <a href="pancakes.php">Pancakes</a>
        <?php
        if(isset($_SESSION['userId'])) {
          echo '<form method="post" action="resources/includes/access.php">
                <button type="submit" name="logout-submit">Logout</button>
                </form>';
        } else {
          echo '<a href="signup.php">Signup</a>';
        }
         ?>
      </div>
      <br>
      <div class="login-form">
        <?php
        if(!isset($_SESSION['userId'])) {
          echo '<form method="post" action="resources/includes/access.php">
                <input type="text" name="mailuid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="login-submit">Login</button>
                </form>';
              }
         ?>
      </div>
    </div>
</div>
