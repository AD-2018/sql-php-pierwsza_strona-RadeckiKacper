<?php
echo("jestes w insert.php <br>");
echo "<li>". $_POST['imie'];
echo "<li>". $_POST['dzial'];
echo "<li>". $_POST['zarobki'];
echo "<li>". $_POST['data_urodzenia'];

require_once "connect.php";

$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia) 
       VALUES (null, '".$_POST['imie']."', '".$_POST['dzial']."','".$_POST['zarobki']."','".$_POST['data_urodzenia']."')";

if ($conn->query($sql) === TRUE) {
  echo "<br>New record created successfully";
  header('Location: https://php-pierwsze.herokuapp.com/danedobazy.php');
} else {

  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
