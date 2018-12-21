<?php

  if(isset($_POST['commentEdit'])){
    editComment();
  }

  function editComment(){
      require 'dbh.inc.php';
      $cid = $_POST['cid'];
      $uidComment = $_POST['uidComment'];
      $commentDate = $_POST['commentDate'];
      $message = $_POST['message'];
      $sql = "UPDATE comments SET message='$message' WHERE cid='$cid'";
      $result = $conn->query($sql);
      header("Location: ../../index.php");
    }
?>
