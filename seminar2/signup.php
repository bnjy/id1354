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
        <?php require 'resources/fragments/header.php'?>
      </header>

      <main>

        <h1>Signup</h1>
        <div class="signup-form">
          <form action="resources/includes/access.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="signup-submit">Signup</button>
          </form>
        </div>
      </main>
    </div>
  </body>
</html>
