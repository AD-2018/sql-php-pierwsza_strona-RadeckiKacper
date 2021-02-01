<!DOCTYPE html>
<html>
<head>
<title>Kacper Radecki</title>
<link rel="stylesheet" href="/style.css">
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-RadeckiKacper">Github</a></br>
    <br/>
    <br/>
    
    <h1>Kacper Radecki nr 10</h1>
</head>
<body>
    <div>
    <br/>
       <a href="/index.php">Strona Główna</a><br/>
        <br/>
        <br/>
       <a href="/pracownicy/orgPracownicy.php">organizacjaPracownicy</a><br/>
        <br/>
        <br/>
       <a href="/pracownicy/funkcAgregujace.php">funkcjeAgregujace</a><br/>
        <br/>
        <br/>
        <a href="/pracownicy/data.php">Data i Czas</a></br>
    <br/>
   

<br/>
        <a href="/biblioteka/ksiazki.php">Książki</a></br>
    <br/>

    </div>
<?php
   require_once("connect.php");

echo ("<br>Autorzy<br>");
$sql = "SELECT * FROM bibl_autor";
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


echo('<select name="Autor">');

    while($row=mysqli_fetch_assoc($result)){
        echo'<option value="'.$row['id_autor'].'">';
        echo($row['autor']);
        echo"</option>"; 
    }
echo('</select>');

echo("<br>");

echo ("<br>Tytuły<br>");
$sql = "SELECT * FROM bibl_tytul";
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


echo('<select name="Tytul">');

    while($row=mysqli_fetch_assoc($result)){
        echo'<option value="'.$row['id_tytul'].'">';
        echo($row['tytul']);
        echo"</option>"; 
    }
echo('</select>');

echo("<br>");
echo("<br>KSIĄŻKI I AUTORZY<br>");
$sql = "SELECT id_book, autor, tytul FROM bibl_book, bibl_tytul, bibl_autor WHERE bibl_tytul.id_tytul = bibl_book.id_tytul AND bibl_autor.id_autor = bibl_book.id_autor";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
           } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>ID BOOK</th><th>ID AUTOR</th><th>ID TYTUL</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_book'].'</td><td>'.$row['autor'].'</td><td>'.$row['tytul'].'</td>');
        echo('</tr>');
    }

echo('</table>');

?>
