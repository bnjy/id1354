<?php
  $commentsNewCount = 1;
  //$_POST['commentNewCount'];
  require 'dbh.inc.php';
  $sql = "SELECT * FROM comments LIMIT $commentsNewCount";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()){
    $myObj = new stdClass();
    $myObj->user = $row['uidComment'];
    $myObj->date = $row['commentDate'];
    $myObj->message = $row['message'];
    $myJSON = json_encode($myObj);
    echo $myJSON;

  }
?>
