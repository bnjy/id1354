<?php

  if(isset($_POST['commentSubmit']))

    require 'dbh.inc.php';

    $uidComment = $_POST['uidComment'];
    $commentDate = $_POST['commentDate'];
    $message = $_POST['message'];

    $sql = "INSERT INTO comments (uidComment,commentDate,message)
            VALUES ('$uidComment','$commentDate','$message')";

    $result = $connComment->query($sql);
?>
