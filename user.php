<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="RTULogo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">

    <title>E-Library | Accounts</title>
</head>

<body>
    <div class="container mt-5">
        <?php
        include('message.php') ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 margin-right="5px">ADD ACCOUNT</h4>
                        <a href="home.php" class="btn btn-danger float end">Home</a>
                        <a href="view.php" class="btn btn-success float end">View Accounts</a>
                    </div>
                    <div class="card-body">
                        <form action="acc.php" method="POST">
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Name">
                            </div>

                            <div class="mb-3">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Enter UserName">
                            </div>

                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="text" name="password" class="form-control" placeholder="Enter Password">
                            </div>

                            <div class="mb-3">
                                <label for="">role</label>
                                <select class="form-select mb-3" name="role" aria-label="Default select example">
                                    <option selected value="user">User</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="add" class="btn btn-primary">Add account</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

</body>

</html>