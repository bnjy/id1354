<?php
echo  "<form action='resources/includes/comments.inc.php' method='POST'>
        <input type='hidden' name='uidComment' value='Anonymous'>
        <input type='hidden' name='commentDate' value='".date('Y-m-d H.i:s')."'>
        <textarea name='message'></textarea><br>
        <button type='submit' name='commentSubmit'>Comment</button>
      </form>";
?>
