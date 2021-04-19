<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/style.css"> 
<title>Kacper Radecki</title>
</head>
<body>
    <div class="container">
    <div class="tytul">
      <a class="link" href="https://github.com/AD-2018/sql-php-pierwsza_strona-RadeckiKacper">Github</a>
      <div class="imie">
      <h1>Kacper Radecki nr 10</h1>
    </div>
  </div>  
  <div class = "nav">
    <?php include_once("../menu.php"); ?>
    </div>
  <div class="strona">
<?php
require_once("../connect.php");
  
  echo ("<br>Autorzy<br>");
$sql = "SELECT * FROM bibl_autor";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
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
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<select name="Tytuł">');

    while($row=mysqli_fetch_assoc($result)){
        echo'<option value="'.$row['id_tytul'].'">';
        echo($row['tytul']);
        echo"</option>"; 
    }
echo('</select>');
  echo("<br>");
  
  echo ("<br>Książki<br>");
$sql = "SELECT id_book, autor, tytul FROM bibl_book, bibl_tytul, bibl_autor WHERE bibl_tytul.id_tytul = bibl_book.id_tytul AND bibl_autor.id_autor = bibl_book.id_autor order by id_book asc";
echo ("<li>".$sql);
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
      </div>
    </body>
    </html>