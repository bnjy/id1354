<?php
  $commentsNewCount = $_POST['commentNewCount'];
  require 'dbh.inc.php';
  $sql = "SELECT * FROM comments LIMIT $commentsNewCount";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()){
    echo "<div class='comment-box'>";
    echo "<p>";
      echo $row['uidComment']."<br>";
      echo $row['commentDate']."<br>";
      echo $row['message'];
    echo "</p>";
    echo "</div>";
  }
?>
