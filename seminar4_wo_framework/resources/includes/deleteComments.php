<?php
    require '/Users/Roth/Sites/seminar2/resources/includes/dbh.inc.php';
    $cid = $_POST['commentDeletePHP'];
    $sql = "DELETE FROM comments WHERE cid='$cid'";
    $result = $conn->query($sql);
?>
