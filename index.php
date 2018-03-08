<?php 


include 'header.php';
include 'footer.php';
if(!isset($_COOKIE["user"])){
    echo"cookie is set<br/>";
    header('location:disclaimer.php');
}
echo "HEJ";

?>

<h2>Fyll i för att se ditt stjärntecken</h2>
<input type='number' placeholder='YYMMDD' name='number'/>
<button onclick="dateOfBirth()">skicka</button>
