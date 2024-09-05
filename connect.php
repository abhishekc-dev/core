<?php

define('SERVER', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'company_db');
define('DEBUG', false);
try {
    $conn = mysqli_connect(SERVER, USER, PASS, DB);
    if (DEBUG == true) {
        echo 'Connection Created';
    } else {
        throw new Exception();
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>