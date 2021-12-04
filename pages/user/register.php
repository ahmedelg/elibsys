<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../src/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="../../src/css/style.css">
  <link rel="stylesheet" href="../../src/css/parts/user/register.css">
  <title>Register</title>
</head>

<body>
  <?php
  require("../layouts/navbar.php");
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="signup-form">
          <form action="" class="mt-5 border p-4 bg-light shadow">
            <h4 class="mb-5 address text-secondary">Register Now</h4>
            <div class="row">
              <div class="mb-3 col-md-6">
                <label>First Name<span class="text-danger">*</span></label>
                <input type="text" name="fname" class="form-control" placeholder="Enter First Name">
              </div>

              <div class="mb-3 col-md-6">
                <label>Last Name<span class="text-danger">*</span></label>
                <input type="text" name="Lname" class="form-control" placeholder="Enter Last Name">
              </div>

              <div class="mb-3 col-md-12">
                <label>Password<span class="text-danger">*</span></label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
              </div>
              <div class="mb-3 col-md-12">
                <label>Confirm Password<span class="text-danger">*</span></label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
              </div>
              <div class="col-md-12">
                <button class="btn btn-dark float-end register-btn">Sign Up </button>
              </div>
            </div>
          </form>
          <p class="text-center mt-3 text-secondary">If you have account, Please <a href="login.php">Login Now</a></p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>