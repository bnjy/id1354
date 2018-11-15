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

  <h1>Login</h1>

      <div class ="login-form">
        <body>
          <form action="login.php" method="post">
          <p>Username: </p>
          <input type="text" name= "username"><br>
          <p>Password:</p>
          <input type="password" name= "password"><br>
          <input type="submit" value = "Login">
          </form>
        </body>
      </div>
  </body>
</html>
