<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "password123";
$db_name = "User-Login-System";

$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);

if($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}