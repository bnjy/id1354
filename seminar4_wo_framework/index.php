<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tasty Recipes</title>
    <meta charset="utf-8">
    <meta name="description" content="A page with tasty recipes">
    <link rel="stylesheet" type="text/css" href="resources/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="resources/css/main_style.css"/>
  </head>

  <body>
    <div class="bg-image">
      <header>
        <?php require 'resources/fragments/header.php' ?>
      </header>

      <main>
        <br>
        <h1>Tasty Recipes</h1>
        <h2>See our <a href="calendar.html">calendar</a> for recipes.</h2>
        <?php
        if(isset($_SESSION['userId'])){
          echo '<div class="php-message"><p>You are logged in!</p></div>';
        } else{
          echo '<div class="php-message"><p>You are logged out!</p></div>';
        }
        ?>
      </main>
    </div>

  </body>
</html>
