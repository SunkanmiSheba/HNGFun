<?php

//require_once 'config.php';

/* PLEASE DO NOT EDIT THIS FILE */
/* PLEASE DO NOT EDIT THIS FILE */
/* PLEASE DO NOT EDIT THIS FILE */
/* PLEASE DO NOT EDIT THIS FILE */

/* IF YOU ARE HAVING ERROR, EDITING THIS FILE IS NOT THE BEST SOLUTION PLEASE DO NOT EDIT THIS FILE */

//require_once '../config.php';

require_once '../../config.php';

try {
    $conn = new PDO("mysql:host=". DB_HOST. ";dbname=". DB_DATABASE , DB_USER, DB_PASSWORD);
} catch (PDOException $pe) {
    die("Could not connect to the database " . DB_DATABASE . ": " . $pe->getMessage());
}

?>
