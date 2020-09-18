<?php
include_once("config.php");
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<?php

    $fetch = mysqli_query($link, "select * from buses" );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <title>VIVA - User</title>

    <!-- title Icon -->
    <link rel="icon" href="../assets/img/title.jpg" />

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="welcome.css" rel="stylesheet">
  </head>
  <header>
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
  <h3>Welcome, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h3>    
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li>
          <a class="btn" href="book.php">Book Now</a>
        </li>
        <li>
          <a class="btn" href="reservations.php">My Reservations</a>
        </li>
      </ul>
      <div class="dropdown">
        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account 
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="reset-password.php">Reset</a>
          <a class="dropdown-item" href="logout.php">Log Out</a>
        </div>
  </nav>
  </header>
<body>
  <br>
  <br>
  <div class="table-responsive container">
       <table id="zero_config" class="table table-striped table-bordered no-wrap">
                 <thead>
                   <h2 class="text-center">AVAILABLE BUSES</h2>
                      <tr>
                          <th>Bus Name</th>
                          <th>Bus Number</th>
                          <th>Type</th>
                          <th>Bus Route</th>
                          <th>Bus Seats</th>
                          <th>BOOK</th>
                      </tr>
                  </thead>
                                        <tbody>
                                        <?php
                                            // fetching data
                                            if(mysqli_num_rows ($fetch) > 0){
                                                while($row = mysqli_fetch_assoc($fetch))
                                                {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['number'];?></td>
                                                <td><?php echo $row['type'];?></td>
                                                <td><?php echo $row['route'];?></td>
                                                <td><?php echo $row['seat'];?></td>
                                                <td>
                                                  <a class="btn btn-primary" href="book.php">Book Now</a>
                                                </td>

                                            </tr>
                                            <?php
                                            }}
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

<br>
<br>
<br>
<br>

  <!-- FOOTER -->
  <footer class="container align-center">
    <p class="float-right"><a href="logout.php">Log Out</a></p>
    <p>&copy; 2020 Gerald E. Gbagbe, (Group 5) Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>