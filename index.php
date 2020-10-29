
<?php
$servername = "mysql-radeckikacper.alwaysdata.net";
$username = "217137";
$password = "nie dla psa";
$dbname = "radeckikacper_mysql";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM pracownicy";
$wynik = mysqli_query($conn, $sql);


    echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th>');

    while($wiersz=mysqli_fetch_assoc($wynik)){
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
