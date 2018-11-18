<?php
if(isset($_POST['login-submit'])){
  loginSubmit();
}

if(isset($_POST['logout-submit'])){
  logoutSubmit();
}

if(isset($_POST['signup-submit'])){
  signup();
}

function loginSubmit(){
  require '/Users/Roth/Sites/seminar2/resources/includes/dbh.inc.php';
  $mailuid = $_POST['mailuid'];
  $password = $_POST['pwd'];
  if(empty($mailuid) || empty($password)){
    header("Location: ../../index.php?error=emptyfields");
    exit();
  }
  else{
    $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../../index.php?error=sqlerror");
      exit();
    }
    else{
      mysqli_stmt_bind_param($stmt, "ss", $mailuid, $password);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if($row = mysqli_fetch_assoc($result)){
        $pwdcheck = password_verify($password, $row['pwdUsers']);
        if($pwdcheck == false) {
          header("Location: ../../index.php");
          exit();
        }
        else if($pwdcheck == true) {
          session_start();
          $_SESSION['userId'] = $row['idUsers'];
          $_SESSION['userUid'] = $row['uidUsers'];
          header("Location: ../../index.php?login=success");
          exit();
        }
        else{
          header("Location: ../../index.php");
          exit();
        }
      }
    }
  }
}

function logoutSubmit(){
  session_start();
  session_unset();
  session_destroy();
  header("Location: ../../index.php");
}

function signup(){
  require '/Users/Roth/Sites/seminar2/resources/includes/dbh.inc.php';
  $username = $_POST['uid'];
  $email = $_POST['mail'];
  $password = $_POST['pwd'];
  $passwordRepeat = $_POST['pwd-repeat'];
  if(empty($username) || empty($email) || empty($password)) {
    header("Location: ../../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
    exit();
  }
  else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
    header("Location: ../../signup.php?error=invalidmailusername");
    exit();
  }
  else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: ../../signup.php?error=invalidmail&uid=".$username);
    exit();
  }
  else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
    header("Location: ../../signup.php?error=invaliduid&mail=".$email);
    exit();
  }

  else {
    $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../../signup.php?error=sqlerror1");
      exit();
  }
      else {
          mysqli_stmt_bind_param($stmt, "s", $username);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_store_result($stmt);
          $resultCheck = mysqli_stmt_num_rows($stmt);
          if($resultCheck > 0){
            header("Location: ../../signup.php?error=usertaken&mail=".$email);
            exit();
          }
      else {
          $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
          $stmt = mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../../signup.php?error=sqlerror2");
            exit();
      }
      else {
          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
          mysqli_stmt_execute($stmt);
          header("Location: ../../signup.php?signup=success");
          exit();
        }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_stmt_close($conn);
}


?>
