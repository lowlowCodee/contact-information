<?php

include "db_connection.php";

$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['Phone_number'] . "</td>
                <td>" . $row['address'] . "</td>
                <td>
                    <button class='btn btn-warning btn-sm' data-bs-toggle='modal' 
                        data-bs-target='#editModal' 
                        data-id='" . $row['id'] . "' 
                        data-name='" . $row['name'] . "' 
                        data-phone='" . $row['Phone_number'] . "' 
                        data-address='" . $row['address'] . "'>
                        Edit
                    </button>
                    <a href='delete.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Delete</a>
                </td>
              </tr>";
    }
}

?>