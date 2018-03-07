<?php 
if(!isset($_COOKIE["user"])){
    echo"cookie is set<br/>";
    header('location:disclaimer.php');
}
echo "HEJ";