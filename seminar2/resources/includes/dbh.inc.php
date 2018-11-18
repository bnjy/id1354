<?php

$serverName = "127.0.0.1";
$dbUsernamne = "root";
$dbPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($serverName,$dbUsernamne,$dbPassword,$dbName);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}
?>
