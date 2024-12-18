<?php
include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $pNumber = $_POST['pNumber'];
    $address = $_POST['address'];

    $sql = "UPDATE contacts SET name=?, Phone_number=?, address=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $name, $pNumber, $address, $id);

    if ($stmt->execute()) {
        echo "Contact updated successfully!";
        header("Location: index.php"); // Redirect back to the main page
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

$conn->close();
?>