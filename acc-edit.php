<?php
session_start();
require 'db_conn.php';
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

    <title>E-Library | Account Editing</title>
</head>

<body>
    <div class="container mt-5">

        <?php
        include('message.php') ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 margin-right="5px">ACCOUNT EDITING</h4>
                        <a href="home.php" class="btn btn-danger float end">Home</a>
                        <a href="view.php" class="btn btn-success float end">View Accounts</a>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $user_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM users WHERE id='$user_id'";
                            $query_run = mysqli_query($conn, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $user = mysqli_fetch_array($query_run);
                        ?>


                        <form action="acc.php" method="POST">
                            <input type="hidden" name="user_id" value="<?= $user['id']; ?>">
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" value="<?= $user['name']; ?>" class="form-control"
                                    placeholder="Enter New Name">
                            </div>

                            <div class="mb-3">
                                <label for="">Username</label>
                                <input type="text" name="username" value="<?= $user['username']; ?>"
                                    class="form-control" placeholder="Enter New Username">
                            </div>

                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="text" name="password" value="<?= $user['password']; ?>"
                                    class="form-control" placeholder="Enter New Password">
                            </div>

                            <div class="mb-3">
                                <label for="">role</label>
                                <select class="form-select mb-3" name="role" aria-label="Default select example">
                                    <option selected value="user">User</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="edit_add" class="btn btn-primary">Submit</button>
                            </div>

                        </form>
                        <?php
                            } else {
                                echo "<h4>No ID Found</h4>";
                            }
                        }
                        ?>
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