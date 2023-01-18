<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Register</title>
</head>
<body class="bg-light">
  <div style="height: 100vh">
  <div class="row h-100 m-0">
    <div class="card w-25 mx-auto my-auto">
      <div class="card-header bg-white border-0 py-3">
        <h1 class="text-center">Register</h1>
      </div>
      <div class="card-body">
        <form action="../actions/register-action.php" method="post">
          <div class="mb-3">
            <label for="first-name" class="form-label">First Name</label>
            <input type="text" name="first_name" id="first-name" class="form-control" required autofocus>
          </div>
          <div class="mb-3">
            <label for="last-name" class="form-label">Last Name</label>
            <input type="text" name="last_name" id="last-name" class="form-control" required>
          </div>

          <!-- Bold for emphasis -->
          <div class="mb-3">
            <label for="username" class="form-label fw-bold">Username</label>
            <input type="text" name="username" id="username" class="form-control fw-bold" maxlength="15" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label fw-bold">Password</label>
            <input type="password" name="password" id="password" class="form-control fw-bold" minlength="8" ariadescribedby="password-info" required>
            <div class="form-text" id="password-info">
              Password must be at least 8 characters long.
            </div>
          </div>

          <button type="submit" class="form-control btn btn-success text-white w-100">Register</button>
        </form>

        <p class="text-center mt-2 small">Registered Already? <a href="../views/">Login</a></p>
      </div>
    </div>
  </div>

  </div>




  <!--javascript bootstrap link  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>