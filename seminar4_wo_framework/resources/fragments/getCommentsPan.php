<?php
  require 'resources/includes/dbh.inc.php';
  $sql = "SELECT * FROM commentsPan";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()){
    echo "<div class='comment-box'><p>";
      echo $row['uidComment']."<br>";
      echo $row['commentDate']."<br>";
      echo $row['message'];
    echo "</p>";

    if(isset($_SESSION['userUid'])) {
      if($_SESSION['userUid'] == $row['uidComment']){
        echo "<form class='delete-form' method='POST' action='resources/includes/comments.php'>
                <input type='hidden' name='cid' value='".$row['cid']."'>
                <button type='submit' name='commentDelete'>Delete</button>
              </form>

              <form class='edit-form' method='POST' action='editcomment.php'>
                <input type='hidden' name='cid' value='".$row['cid']."'>
                <input type='hidden' name='uidComment' value='".$row['uidComment']."'>
                <input type='hidden' name='date' value='".$row['commentDate']."'>
                <input type='hidden' name='message' value='".$row['message']."'>
                <button>Edit</button>
              </form>
              ";
      }
    }
    echo "</div>";
  }
?>
