<?php 
if(!isset($_COOKIE["user"])){
    echo"cookie is set<br/>";
    header('location:disclaimer.php');
}
echo "HEJ";



echo "<form method='POST'>
<h2>Fyll i för att se ditt stjärntecken</h2>
<input type='text' placeholder='Förnamn' name='firstname'/>
<input type='text' placeholder='Efternamn' name='lastname'/>
<input type='number' placeholder='YYMMDD' name='number'/>
<input type='submit' value='send'/>
</form>";