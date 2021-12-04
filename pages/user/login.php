<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../src/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="../../src/css/style.css">
  <link rel="stylesheet" href="../../src/css/parts/user/login.css">
  <title>Log In</title>
</head>

<body>
  <?php
  require("../layouts/navbar.php");
  ?>
  <div class="wrapper">
    <div class="logo"> <img src="../../src/assets/imgs/logo/logo.jpg" alt=""> </div>
    <div class="text-center mt-4 name fs-3"> <span>Lib</span><span>Sys</span>
    </div>
    <form class="p-3 mt-3" action="" method="POST">
      <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="text"
          name="username" id="userName" placeholder="Username" required> </div>
      <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="password"
          name="userpass" id="pwd" placeholder="Password" required> </div> <button class="btn mt-3">Login</button>
    </form>
    <div class="text-center fs-6"> <a href="#">Forget password?</a> or <a href="register.php">Sign up</a> </div>
  </div>
  <script src="../../src/bootstrap/bootstrap.js"></script>
</body>

</html>