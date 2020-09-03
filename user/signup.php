<?php

?>
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>VIVA · User Sign In</title>
    <!-- title Icon -->
    <link rel="icon" href="../assets/img/users.jpeg" />

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body>
  <form class="form-signin">
      <div class="text-center">
        <a href="../index.php"><img class="mb-4" src="../assets/img/users.jpeg" alt="" width="72" height="72"></a>
        <h1 class="h3 mb-3 font-weight-normal">User Sign Up</h1>
      </div>
  <label for="inputUsername">Full Name:</label>
  <input type="name" id="inputName" class="form-control" placeholder="Full Name" required autofocus>
  <label for="inputUsername">Username:</label>
  <input type="username" id="inputUsername" class="form-control" placeholder="username" required autofocus>
  <label for="inputEmail">Email address:</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputPassword">Password:</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <label for="inputPassword">Confirm Password:</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>  
  <div>
    <a href="signin.php">Already Signed up?</a>
  </div>
  <br>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2020</p>
</form>
</body>
</html>
