<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tasty Recipes</title>
    <meta charset="utf-8">
    <meta name="description" content="A page with tasty recipes">
    <link rel="stylesheet" type="text/css" href="resources/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="resources/css/main_style.css"/>
    <link rel="stylesheet" type="text/css" href="resources/css/recipe_style.css"/>
    <
  </head>

  <body>
    <div class="bg-image">
      <header>
        <?php require 'resources/fragments/header.php' ?>
      </header>

      <?php
      require 'resources/includes/dbh.inc.php';
      $cid = $_POST['cid'];
      $uidComment = $_POST['uidComment'];
      /*$commentDate = $_POST['commentDate'];
      <input type='hidden' name='commentDate' value='".$commentDate."'>*/
      $message = $_POST['message'];

      echo  "<form method='POST' action='resources/includes/editComments.inc.php'>
              <input type='hidden' name='cid' value='".$cid."'>
              <input type='hidden' name='uidComment' value='".$uidComment."'>
              <textarea name='message'>".$message."</textarea><br>
              <button type='submit' name='commentSubmit'>Edit</button>
            </form>";
      ?>

    </div>
  </body>
</html>
