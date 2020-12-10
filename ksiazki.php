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


echo("<br>Autorzy<br>");
$sql = "SELECT * FROM biblAutor";
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok<br>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<select name="Autor">');
    while($row=mysqli_fetch_assoc($result)){
        echo'<option value="'.$row['id_autor'].'">';
        echo($row['autor']);
        echo"</option>"; 
    }
echo('</select>.<br>');

echo("<br>Tytuły<br>");
$sql = "SELECT * FROM biblTytul";
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok<br>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<select name="Tytul">');
    while($row=mysqli_fetch_assoc($result)){
        echo'<option value="'.$row['id_tytul'].'">';
        echo($row['tytul']);
        echo"</option>"; 
    }
echo('</select>.<br>');
    

echo("<br>WSZYSTKO<br>");
$sql = "SELECT id_book, autor, tytul FROM bibl_book, biblTytul, biblAutor WHERE biblTytul.id = bibl_book.biblTytul_id AND biblAutor.id = bibl_book.biblAutor_id";
$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Id</th><th>Autor</th><th>Tytuł</th>');
    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_book'].'</td><td>'.$row['autor'].'</td><td>'.$row['tytul'].'</td>');
        echo('</tr>');
    }
    echo('</table>');
?>
</body>
</html>
