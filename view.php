<?php
session_start();
require "db_conn.php";
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

    <title>E-Library | View Accounts</title>
</head>

<body>
    <div class="container mt-5">
        <?php
        include('message.php') ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 margin-right="5px">View Accounts</h4>
                        <a href="home.php" class="btn btn-danger float end">Home</a>
                        <a href="user.php" class="btn btn-success float end">Add Account</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM users";
                                $query_run = mysqli_query($conn, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    foreach ($query_run as $account) {
                                        //echo $account['name'];
                                ?>
                                <tr>
                                    <?php
                                        $i = 1;

                                        while ($account = mysqli_fetch_assoc($query_run)) { ?>

                                <tr>
                                    <th>
                                        <?= $i ?>
                                    </th>
                                    <td>
                                        <?= $account['name'] ?>
                                    </td>
                                    <td>
                                        <?= $account['username'] ?>
                                    </td>
                                    <td>
                                        <?= $account['role'] ?>
                                    </td>

                                    <td>
                                        <a href="acc-edit.php?id=<?= $account['id']; ?>"
                                            class="btn btn-success btn-sm">Edit</a>
                                    </td>
                                </tr>

                                <?php

                                            $i++;

                                        } ?>
                                </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h5> No Record Found </h5>";
                                }
                                ?>
                            </tbody>
                        </table>
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