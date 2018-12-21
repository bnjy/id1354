<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tasty Recipes</title>
    <meta charset="utf-8">
    <meta name="description" content="A page with tasty recipes">
    <link rel="stylesheet" type="text/css" href="resources/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="resources/css/main_style.css"/>
    <link rel="stylesheet" type="text/css" href="resources/css/editcomments.css"/>

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
      $message = $_POST['message'];

      echo  "<div class='edit-form'>
              <form method='POST' action='resources/includes/comments.php'>
              <input type='hidden' name='cid' value='".$cid."'>
              <input type='hidden' name='uidComment' value='".$uidComment."'>
              <textarea name='message'>".$message."</textarea><br>
              <button type='submit' name='commentEdit'>Edit</button>
            </form>
            </div>";
      ?>

    </div>
  </body>
</html>
