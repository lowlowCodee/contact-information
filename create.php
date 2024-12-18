<?php

include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $pNumber = $_POST['pNumber'];
    $address = $_POST['address'];
}

$sql = "INSERT INTO contacts (name, Phone_number, address) VALUES ('$name', '$pNumber', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "New Contact Added";
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>