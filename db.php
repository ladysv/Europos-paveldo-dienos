<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "kforma");

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if($mysqli->connect_error) {
    echo "Sorry.\n";
    echo 'Klaida: ' . $mysqli->connect_error . '\n';
    exit();
}

mysqli_query($mysqli, "INSERT INTO uzklausa(vardas, email, phone, message)
VALUES('$_POST[vardas]', '$_POST[email]', '$_POST[phone]', '$_POST[message]')");