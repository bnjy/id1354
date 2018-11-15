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
      </div>

      <div>
        <?php
        if(isset($_SESSION['userId'])) {
          echo '<form action="resources/includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
                </form>';
        }
        else {
          echo '<form action="resources/includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="login-submit">Login</button>
                </form>
                <a href="signup.php">Signup</a>';
        }
         ?>
      </div>
    </div>
</div>
