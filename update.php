<?php
include 'db_connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM contacts WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $pNumber = $_POST['pNumber'];
    $address = $_POST['address'];


    $sql = "UPDATE contacts SET name=?, Phone_number=?, address=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $name, $pNumber, $address, $id);

    if ($stmt->execute()) {
        header("Location: index.php?msg=Data updated successfully");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1>Edit Contact Information</h1>
            </div>
            <div class="card-body">
                <form action="update.php?id=<?= $id ?>" method="POST">
                    <label>Name</label>
                    <input type="text" name="name" value="<?= htmlspecialchars($row['name']) ?>" class="form-control"
                        required>
                    <label>Phone Number</label>
                    <input type="text" name="pNumber" value="<?= htmlspecialchars($row['Phone_number']) ?>"
                        class="form-control" required>
                    <label>Address</label>
                    <input type="text" name="address" value="<?= htmlspecialchars($row['address']) ?>"
                        class="form-control" required>
                    <button type="submit" class="btn btn-success mt-3">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

</html>