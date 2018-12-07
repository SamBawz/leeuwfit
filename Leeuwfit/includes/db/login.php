<?php
include_once("connect.php");
$password_inlog = $_POST["password"];
$password_hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
$username_inlog = $_POST["name"];

$sqlinsert = "SELECT * FROM Gebruikers WHERE username = '$username_inlog'";
$result = mysqli_query($con, $sqlinsert);
//$count = mysqli_num_rows($result);
if ($result->num_rows >= 1) {
  $row = $result->fetch_array(MYSQLI_ASSOC);
  if ($row['password'] === $password_inlog) {
    //voor wanneer de password hashed is
//  if (password_verify($password_inlog, $row['password'])) {
    session_start();
    $_SESSION['user'] = $username_inlog;
    header("Location: http://localhost/leeuwfit/account/index.php");
    exit();
  } 
  else echo "password is incorrect";
}
else echo "$username_inlog bestaat niet";


//if($count >= 1) {
//    $_SESSION['user'] = $username_inlog;
//    echo "SUCCES";
//    }
//    else echo "Username of password is incorrect";
////echo $password_hash;
//echo $username_inlog;
//echo $password_inlog;


