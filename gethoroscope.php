<?php 
include 'header.php';
include 'footer.php';
if(!isset($_COOKIE["user"])){
    echo"cookie is set<br/>";
    header('location:disclaimer.php');
}