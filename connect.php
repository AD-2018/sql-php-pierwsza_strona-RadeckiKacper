<?php
$servername = "mysql-bbieniekb.alwaysdata.net";
$username = "bbieniekb";
$password = "dorsz1234";
$dbname = "bbieniekb_baza";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>
