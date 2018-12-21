<?php
session_start();
session_unset();
session_destroy();
$response = 'loggedOut';
echo $response;
?>
