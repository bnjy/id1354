<?php
  require 'dbh.inc.php';
  $sql = "SELECT * FROM comments";
  $result = $connComment->query($sql);
  while($row = $result->fetch_assoc()){
    echo "<div class = 'comment-box'>";
      echo $row['uidComment']."<br>";
      echo $row['commentDate']."<br>";
      echo $row['message'];
    echo "</div>";
  }

?>
