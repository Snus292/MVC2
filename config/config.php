<?php

$dbHost = "localhost";
$dbUser = "phpmvc2";
$dbPassword = "phpmvc2";
$dbName = "phpmvc2";

// соединение с DB
$db = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

// проверка наличие ошибок
if ($db->connect_error) {
    die("Ошибка подключения к базе данных: " . $db->connect_error);
}

?>


