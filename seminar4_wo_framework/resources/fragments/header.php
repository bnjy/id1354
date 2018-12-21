<?php
session_start();
?>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<div class ="head">
    <div class="nav-container">
      <div class="navbar">
        <a href="index.php">Home</a>
        <a href="calendar.php">Calendar</a>
        <a href="meatballs.php">Meatballs</a>
        <a href="pancakes.php">Pancakes</a>

        <?php
        if(isset($_SESSION['userId'])) {
          echo '<form method="post">
                <button id="logut-button" type="submit">Logout</button>
                </form>';
        } else {
          echo '<a href="signup.php">Signup</a>';
        }
         ?>
        <script>
        $('#logut-button').click(function() {
          $.ajax({
            type: 'GET',
            url: 'resources/includes/logoutAccess.php',
            success: function(msg) {
              if(msg == 'loggedOut'){
                window.location.reload();
                }
            }
          });
        });
        </script>
        
      </div>

      <br>
      <div class="login-form">
          <?php
          if(!isset($_SESSION['userId'])) {
            echo '<form method="post">
                <input id="username" type="text" placeholder="Username...">
                <input id="password" type="password" placeholder="Password...">
                <button id="login-button" type="button">Login</button>
            </form>';
                }
           ?>

          <script type="text/javascript">
          $('#login-button').click(function() {
              var username = $('#username').val();
              var password = $('#password').val();
              $.ajax({
                  type: 'POST',
                  url: 'resources/includes/loginAccess.php',
                  data: {
                    usernamePHP: username,
                    passwordPHP: password
                   },
                  success: function() {
                      window.location.reload();
                  }
              });
          });
          </script>
      </div>
    </div>
</div>
