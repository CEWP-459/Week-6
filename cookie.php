<?php

setcookie('example', 'hello', time() + 2 * 24 * 60 * 60);
echo "Cookie Set <br>";

var_dump($_COOKIE); echo " Before <br>";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // unset($_COOKIE['example']);

    setcookie('example', 'hello', time() - 3600);

}


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cookie Example</title>
    </head>
    <body>
        <h1> Cookie Example </h1>
        <form method="post">
            <button>Delete Cookie</button>
        </form>    
    </body>
</html>