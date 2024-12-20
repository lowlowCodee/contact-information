<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Info</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<body>

    <div class="container">
        <div class="card mt-4">
            <div class="card-header justify-content-between align-items-center d-flex">
                <h1>Contact Information</h1>
                <a type="button" href="#" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#informationModal">Add
                    Contact</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "read.php";
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="informationModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Contact Information</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="info-form" action="create.php" method="POST">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter your Name">
                        <label for="pNumber">Phone Number</label>
                        <input type="text" name="pNumber" class="form-control" placeholder="Enter your Phone Number">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Enter your Address">
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" form="info-form">Submit</button>
                </div>
            </div>
        </div>

    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>



</html>