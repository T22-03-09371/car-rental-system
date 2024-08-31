<?php
$servername = "localhost";
$dbname = "rentaldb";
$username = "root";
$password = "";

$mysqli = new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_error) {
    die("Connection error: " . $mysqli->connect_error);
}
?>
