<?php

session_start();

$_SESSION['is_logged_in'] = true;

?>

<?php require 'includes/header.php'; ?>

<h2>Login</h2>

<form>

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

