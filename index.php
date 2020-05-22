<!doctype html>
    <html>
    <body>

        <?php

// nawiazujemy polaczenie 
$connect = @mysqli_connect('localhost', 'root') 
or die('Nie połączono.<br />Błąd: '.mysql_error($connect)); 
echo "Połączono<br />"; 
$baza = @mysqli_select_db($connect, 'sklep') 
or die('Nie połączono<br />Błąd: '.mysqli_error($connect)); 
echo "Połączono <br/>"; 
echo" <br/> <br/>"

?>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
   Symbol: <input type="text" name="symbol"><br/><br/>
    Nazwa: <input type="text" name="nazwa"><br/><br/>
  Kat:<select name="select"><br/><br/>
<option>Drukarka</option>
<option>Laptop</option>
<option>Skaner</option>
</select><br/><br/>
   Sztuk: <input type="value" name="sztuk"><br/><br/>
   Cena: <input type="value" name="cena"><br/><br/>
    <input type="submit" name="Dodaj" value="Dodaj">
    </form>

<br/>
<br/>


<?php


$symbol = $_POST['symbol'];
$nazwa= $_POST['nazwa'];
$kat = $_POST['kat'];
$sztuk = $_POST['sztuk'];
$cena = $_POST['cena'];
//dodawanie produktów
if($symbol and $nazwa and $kat and $sztuk and $cena) {
    
    
    $connect = @mysql_connect('localhost', 'root', 'haslo')
    or die('Brak połączenia ');
    $baza = @mysql_select_baza('test', $connect)
    or die('Brak połączenia z bazą');
    
    
    $ins = @mysql_query("INSERT INTO test SET symbol='$symbol', nazwa='$nazwa', kat='$kat', sztuk='$sztuk', cena='$cena'");
    
    if($ins) echo "Nie dodano";
    else echo "Nie dodano nowego produktu";
    
    mysql_close($connect);
}

	


$wynik = mysql_query("SELECT * FROM test")
or die('Błąd zapytania');

//tutaj sprawdzamy czy są wprowadzone jakiekolwiek dane, któe można wyświetlić 
if(mysql_num_rows($wynik) > 0) {

    echo "<table cellpadding=\"2\" border=1>";
    while($r = mysql_fetch_array($wynik)) {
        echo "<tr>";
        echo "<td>".$r[1]."</td>";
        echo "<td>".$r[2]."</td>";
        echo "<td>
       <a href=\"index.php?a=del&amp;id={$r[0]}\">DEL</a>
       <a href=\"index.php?a=edit&amp;id={$r[0]}\">EDIT</a>
       </td>";
        echo "</tr>";
    }
    echo "</table>";
} 

mysqli_close($connect); 

?>

</body>



</html>
