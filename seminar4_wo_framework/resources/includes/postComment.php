<?php
    require '/Users/Roth/Sites/seminar2/resources/includes/dbh.inc.php';
    $uidComment = $_POST['commentUsernamePHP'];
    $commentDate = $_POST['commentDatePHP'];
    $message = $_POST['commentMessagePHP'];
    $sql = "INSERT INTO comments (uidComment,commentDate,message)
            VALUES ('$uidComment','$commentDate','$message')";
    $result = $conn->query($sql);
    header("Location: ../../index.php?comment=success");
    exit();
?>
