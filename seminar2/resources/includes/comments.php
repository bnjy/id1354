<?php

  if(isset($_POST['commentSubmit'])){
    setComment();
  }

  if(isset($_POST['commentEdit'])){
    editComment();
  }

  if(isset($_POST['commentDelete'])){
    deleteComment();
  }

  function setComment(){
    require 'dbh.inc.php';
    $uidComment = $_POST['uidComment'];
    $commentDate = $_POST['commentDate'];
    $message = $_POST['message'];
    $sql = "INSERT INTO comments (uidComment,commentDate,message)
            VALUES ('$uidComment','$commentDate','$message')";
    $result = $conn->query($sql);
    header("Location: ../../index.php?comment=success");
    exit();
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

  function deleteComment(){
    require 'dbh.inc.php';
    $cid = $_POST['cid'];

    $sql = "DELETE FROM comments WHERE cid='$cid'";
    $result = $conn->query($sql);
    header("Location: ../../index.php");
    }
