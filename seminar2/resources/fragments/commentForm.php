<?php
if(isset($_SESSION['userUid'])){
echo  "<form action='resources/includes/setComments.inc.php' method='POST'>
        <input type='hidden' name='uidComment' value='".$_SESSION['userUid']."'>
        <input type='hidden' name='commentDate' value='".date('Y-m-d H.i:s')."'>
        <textarea name='message'></textarea><br>
        <button type='submit' name='commentSubmit'>Comment</button>
      </form>";
      }
?>
