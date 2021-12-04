<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../src/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="../../src/css/parts/user/login.css">
  <title>Log In</title>
</head>

<body>
  <div class="wrapper">
    <div class="logo"> <img src="../../src/assets/imgs/logo/logo.jpg" alt=""> </div>
    <div class="text-center mt-4 name fs-3"> Admin
    </div>
    <form class="p-3 mt-3" action="" method="POST">
      <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="text"
          name="username" id="userName" placeholder="adminname" required> </div>
      <div class="form-field d-flex align-items-center"> <span class="fas fa-key"></span> <input type="password"
          name="userpass" id="pwd" placeholder="adminpassword" required> </div> <button class="btn mt-3">Submit</button>
    </form>

  </div>
  <script src="../../src/bootstrap/bootstrap.js"></script>
</body>

</html>