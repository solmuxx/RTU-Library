<?php
session_start();
require 'db_conn.php';
include "../db_conn.php";

if (isset($_POST['edit_add'])) {
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);

    $query = "UPDATE users SET name='$name', username='$username', password='$password',role='$role' WHERE id='$user_id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = " Successfully";
        header("Location: view.php");
        exit(0);
    } else {
        $_SESSION['message'] = " Unsuccessfully";
        header("Location: view.php");
        exit(0);
    }
}

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = test_input($_POST['name']);
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);

    if (isset($_POST['add'])) {
        if (empty($name)) {
            header("Location: ../user.php?error=Name is Required");
        } else if (empty($password)) {
            header("Location: ../user.php?error=Password is Required");
        } else if (empty($username)) {
            header("Location: ../user.php?error=Username is Required");
        } else {
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $role = mysqli_real_escape_string($conn, $_POST['role']);

            $query = "INSERT INTO users(name, username, password, role) VALUE('$name', '$username', md5('$password'), '$role')";

            $query_run = mysqli_query($conn, $query);
        }


        if ($query_run) {
            $_SESSION['message'] = " Successfully";
            header("Location: user.php");
            exit(0);
        } else {
            $_SESSION['message'] = " Unsuccessfully";
            header("Location: user.php");
            exit(0);
        }


    }
}


?>