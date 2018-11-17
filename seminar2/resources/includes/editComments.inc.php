<?php
if(isset($_POST['commentSubmit']) || isset($_SESSION['userUid']))
  require 'dbh.inc.php';
  $cid = $_POST['cid'];
  $uidComment = $_POST['uidComment'];
  $commentDate = $_POST['commentDate'];
  $message = $_POST['message'];
  $sql = "UPDATE comments SET message='$message' WHERE cid='$cid'";
  $result = $connComment->query($sql);
  header("Location: ../../index.php");

 ?>
