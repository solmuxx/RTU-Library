<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" href="RTULogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            background: url(image/RTU.jpeg) no-repeat;
            background-size: cover;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            margin-top: 150px;
        }

        .border {
            background-color: white;
        }

        .form-label {
            font-size: large;
        }



        * {
            box-sizing: border-box;

        }

        .input-container {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            width: 100%;
            margin-bottom: 15px;
        }

        .icon {
            padding: 10px;
            background: dodgerblue;
            color: white;
            min-width: 50px;
            text-align: center;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            outline: none;
        }

        .input-field:focus {
            border: 2px solid dodgerblue;
        }

        /* Set a style for the submit button */
        .btn {
            background-color: dodgerblue;
            color: white;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .btn:hover {
            opacity: 1;
        }
    </style>
</head>

<body>
    <form action="signup-check.php" style="max-width:500px;margin:auto" method="post" class="border shadow p-3 rounded">
        <h1 class="text-center p-3">Register</h1>
        <?php if (isset($_GET['error'])) { ?>
        <p class="error">
            <?php echo $_GET['error']; ?>
        </p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
        <p class="success">
            <?php echo $_GET['success']; ?>
        </p>
        <?php } ?>


        <?php if (isset($_GET['name'])) { ?>
        <input type="text" name="name" placeholder="Name" value="<?php echo $_GET['name']; ?>"><br>
        <?php } else { ?>

        <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input class="input-field" type="text" name="name" placeholder="Name"><br>
        </div>
        <?php } ?>

        <div class="input-container">
            <i class="fa fa-envelope icon"></i>
            <?php if (isset($_GET['username'])) { ?>
            <input type="text" name="username" placeholder="User Name" value="<?php echo $_GET['username']; ?>"><br>
            <?php } else { ?>
            <input class="input-field" type="text" name="username" placeholder="User Name"><br>
            <?php } ?>
        </div>

        <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" name="password" placeholder="Password"><br>
        </div>

        <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" name="re_password" placeholder="Re_Password"><br>
        </div>

        <button type="submit">Register</button>
        <a href="index.php">Already have an account?</a>
    </form>
</body>

</html>