<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Leeuwfit";
$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
  die("Connection mislukt: " . $con->connect_error);
}