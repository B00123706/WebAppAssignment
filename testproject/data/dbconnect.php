<?php
require "../config.php";

try {
    $connection = new PDO($dsn, $dbusername, $dbpassword, $options);
    // insert new user code will go here

} catch (PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}


