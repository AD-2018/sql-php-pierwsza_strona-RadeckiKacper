<?php
$servername = "mysql-tather1824.alwaysdata.net";
$username = "232125";
$password = "Niedlapsa1";
$dbname = "tather1824_niewiem";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>
