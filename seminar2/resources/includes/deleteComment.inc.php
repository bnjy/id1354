<?php

if(isset($_POST['commentDelete'])){
  require 'dbh.inc.php';
  $cid = $_POST['cid'];

  $sql = "DELETE FROM comments WHERE cid='$cid'";
  $result = $connComment->query($sql);
  header("Location: ../../index.php");
}
