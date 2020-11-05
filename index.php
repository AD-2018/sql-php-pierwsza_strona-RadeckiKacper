<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

  <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-RadeckiKacper">Github</a>
  <h1>Kacper Radecki nr 10 </h1>
<?php
  
$servername = "mysql-radeckikacper.alwaysdata.net";
$username = "217137";
$password = "Niedlapsa1";
$dbname = "radeckikacper_mysql";

$conn = new mysqli($servername, $username, $password, $dbname);
  echo("ZADANIE 1")
$sql = "SELECT * FROM pracownicy";
  echo($sql)
$wynik = mysqli_query($conn, $sql);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

    echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th>');

    while($wiersz=mysqli_fetch_assoc($wynik)){
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
  
    echo("ZADANIE 2")
$sql = "SELECT * FROM pracownicy";
  echo($sql)
$wynik = mysqli_query($conn, $sql);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

    echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th>');

    while($wiersz=mysqli_fetch_assoc($wynik)){
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
  ?>
</body>
  </html>
