<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="RTULogo.png">
  <title>eLibrary</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<style>
  body {
    background: url(image/RTU.jpeg) no-repeat;
    background-size: cover;
  }

  .border {
    background-color: white;
  }

  .form-label {
    font-size: large;
  }
</style>

<body>

  <div class="container d-flex justify-content-center
    align-items-center" style="min-height: 100vh">
    <form class="border shadow p-3 rounded" action="php/check-login.php" method="post" style="width: 450px;">
      <h1 class="text-center p-3"> LOGIN</h1>

      <?php if (isset($_GET['error'])) { ?>
      <div class="alert alert-danger" role="alert">
        <?= $_GET['error'] ?>
      </div>
      <?php } ?>

      <div class="mb-3">
        <label for="username" class="form-label">Username</label>

        <input type="text" name="username" class="form-control" id="username">
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>

        <input type="password" name="password" class="form-control" id="password">
      </div>

      <div class="mb-0">
        <label class="form-label">Select User Type:</label>
      </div>

      <select class="form-select mb-3" name="role" aria-label="Default select example">
        <option selected value="user">User</option>
        <option value="admin">Admin</option>
      </select>

      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="signup.php">Create an account</a>

    </form>

  </div>


</body>

</html>