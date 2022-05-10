<?php

    setcookie('sub-directory-cookie', 'hi', time() + 2 * 24 * 60 * 60, '/');
    echo "Sub Directory Cookie Set \n";

?>