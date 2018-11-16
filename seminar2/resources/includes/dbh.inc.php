<?php

$serverName = "127.0.0.1";
$dbUsernamne = "root";
$dbPassword = "";
$dbName = "loginsystem";
$dbNameComment = "commentsection";

$conn = mysqli_connect($serverName,$dbUsernamne,$dbPassword,$dbName);

$connComment = mysqli_connect($serverName,$dbUsernamne,$dbPassword,$dbNameComment);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}

if(!$connComment){
  die("Connection failed: ".mysqli_connect_error());
}

 ?>
