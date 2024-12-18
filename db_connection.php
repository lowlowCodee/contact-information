<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "contact_information";

$conn = new mysqli($hostname, $username, $password, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>