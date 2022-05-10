<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST['username'] == 'ksharma' && $_POST['password'] == 'secret') {

       die('Login Success!');

    } else {

        die('Login Failed!');

    }
}

?>
<?php require 'includes/header.php'; ?>

<h2>Login</h2>

<form method="post">

    <div>
        <label for="username">Username</label>
        <input name="username" id="username">
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
    </div>

    <button>Log in</button>

</form>

