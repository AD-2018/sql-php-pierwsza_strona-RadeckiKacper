
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-RadeckiKacper">Github</a>
    <div>
       <a href="orgPracownicy.php">organizacjaPracownicy.php</a><br/>
       <a href="funkcAgregujace.php">funkcjeAgregujace.php</a><br/>
    </div>
    <h1>Kacper Radecki nr 10</h1>
</head>
<body>
<?php
$servername = "mysql-radeckikacper.alwaysdata.net";
$username = "217137";
$password = "Niedlapsa1";
$dbname = "radeckikacper_mysql";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT imie FROM pracownicy where dzial=2";
    echo("zadanie 1");
    echo($sql)
$wynik = mysqli_query($conn, $sql);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

    echo('<table border="1">');
    echo('<th>Imie</th>');

    while($wiersz=mysqli_fetch_assoc($wynik)){
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    $sql = "SELECT imie FROM pracownicy where dzial=2 and dzial=3";
    echo("zadanie 1");
$wynik = mysqli_query($conn, $sql);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

    echo('<table border="1">');
    echo('<th>Imie</th>');

    while($wiersz=mysqli_fetch_assoc($wynik)){
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
  ?>
  </body>
  </html>
