<?php

echo "<h1>användarvillkor</h1>";

echo "<p>Nulla sed odio velit. Donec blandit nulla augue, id mollis purus tincidunt ut. 
Nullam sed sem in massa suscipit dictum et et est. In egestas mi eu tempor 
scelerisque. Duis id ultrices mi, vel lacinia orci. Vestibulum ante ipsum primis 
in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum ante ipsum 
primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec efficitur 
massa in quam mollis ultrices.</p>";

echo "<form method='POST'><input type='submit' value='Jag godkänner villkoren'></form>";

if(isset($_COOKIE["user"])){
    echo"cookie is set<br/>";
    header('location:index.php');
}

if($_SERVER['REQUEST_METHOD'] == "POST")
{

    $user = "yes";
    print_r($user);

    if(!isset($_COOKIE["user"]))
    {
        setcookie("user", serialize($user), time()+3600);
        echo "cookie is not set";
        header('location:index.php');

    }

}