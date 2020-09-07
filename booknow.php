<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <title>VIVA - Best Bus Booking System In Ghana.</title>

    <!-- title Icon -->
    <link rel="icon" href="./assets/img/title.jpg" />

    <!-- Bootstrap core CSS -->
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="booknow.css" rel="stylesheet">
</head>
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="index.php"><strong>QUICK RESERVATION</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">

      </ul>
      <a class="btn btn-lg btn-light" href="user/login.php" role="button">Log In</a>
      <a class="btn btn-lg btn-primary" href="user/register.php" role="button">Sign Up</a>
  </nav>
  </header>
<body class="container">
  <form class="form-signin">
  <div class="form-row">
    <div>
      <h2>FILL THE FORM BELOW TO SAVE A SEAT</h2>
    </div>
    <hr>
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">First name</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="First name" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Last name</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Last name"  required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Email</label>
        <input type="email" class="form-control" id="validationDefaultUsername" placeholder="e.g mike@gmail.com" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Pick Up location</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Adenta</option>
        <option value="1">Madina</option>
        <option value="2">legon</option>
        <option value="3">Lapaz</option>
      </select>
    </div>
    <div class="col-md-6 mb-3">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Drop Off location</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Legon</option>
        <option value="1">Lapaz</option>
        <option value="2">Adenta</option>
        <option value="3">Madina</option>
      </select>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Phone Number</label>
      <input type="text" class="form-control" id="validationDefault04" placeholder="+233..." required>
    </div>
    <div class="col-md-6 mb-3">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Pick seat</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Front seat (1)</option>
        <option value="1">Front seat (2)</option>
        <option value="2">Front seat (3)</option>
        <option value="3">Front seat (4)</option>
        <option value="4">Front seat (5)</option>
        <option value="5">Front seat (6)</option>
        <option value="6">Middle seat (7)</option>
        <option value="7">Middle seat (8)</option>
        <option value="8">Middle seat (9)</option>
        <option value="9">Middle seat (10)</option>
        <option value="10">Middle seat (11)</option>
        <option value="11">Back seat (12)</option>
        <option value="12">Back seat (13)</option>
        <option value="13">Back seat (14)</option>
        <option value="14">Back seat (15)</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <button class="btn btn-success" type="submit">Proceed to payment</button>
</form>
</body>
</html>  