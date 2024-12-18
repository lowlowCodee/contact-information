<?php
include "db_connection.php";

$id = $_GET['id'];
$sql = "DELETE FROM contacts WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php?msg=Data deleted successfully");
    exit();
}

?>