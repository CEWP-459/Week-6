<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    setcookie('example', 'hello', time() + 2 * 24 * 60 * 60);
    echo 'Cookie Set';
    
    var_dump($_COOKIE);

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
            <button>Set Cookie</button>
        </form>    
    </body>
</html>