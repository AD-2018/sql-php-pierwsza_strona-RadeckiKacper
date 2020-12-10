<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-RadeckiKacper">Github</a></br>
    <br/>
    <br/>
    <div>
       <a href="orgPracownicy.php">organizacjaPracownicy.php</a><br/>
        <br/>
        <br/>
       <a href="funkcAgregujace.php">funkcjeAgregujace.php</a><br/>
        <br/>
        <br/>
        <a href="data.php">Data i Czas</a></br>
    <br/>
    <br/>
        <a href="formularz.html">Formularz</a></br>
    <br/>
<br/>
        <a href="insert.php">Dane do Bazy</a></br>
    <br/>

    </div>
    <h1>Kacper Radecki nr 10</h1>
</head>
<body>
<?php
    require_once("lib.php");
echo("<h3>Tabela Autorów</h3>");
$sql = "SELECT * FROM biblAutor";
$result = mysqli_query($conn, $sql);
    echo('<table border="1">');
    echo('<th>id</th><th>Autor</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['autor'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

echo("<h3>Tabela Tytułów</h3>");
$sql = "SELECT * FROM biblTytul";
    $result = mysqli_query($conn, $sql);
    echo('<table border="1">');
    echo('<th>id</th><th>Tytuł</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['tytul'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
echo("<h3>Połączone</h3>");
$sql = "SELECT * FROM biblAutor_biblTytul";
    $result = mysqli_query($conn, $sql);
        echo('<table border="1">');
    echo('<th>id</th><th>Autor</th><th>Tytuł</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['biblAutor_id'].'</td><td>'.$row['biblTytul_id'].'</td>');
        echo('</tr>');
    }
    echo('</table>');
?>
</body>
</html>
