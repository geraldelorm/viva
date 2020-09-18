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

    $fetch = mysqli_query($link, "select * from bookings" );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <title>VIVA - User</title>

    <!-- title Icon -->
    <link rel="icon" href="../assets/img/users.jpeg" />

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="welcome.css" rel="stylesheet">
  </head>
  <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
  <h3>Welcome, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h3>    
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">

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
                   <h2 class="text-center">Ticket </h2>
                      <tr> 
                         <th> Ticket Id </th>
                          <th> Name </th>
                          <th> Email </th>
                          <th> Booked On </th>
                          <th> Bus Type </th>
                          <th> From - To </th>
                          <th> Reserved seat </th>
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
                                                <td><?php echo $row['id'];?></td>
                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['email'];?></td>
                                                <td><?php echo $row['created_on'];?></td>
                                                <td><?php echo $row['bus'];?></td>
                                                <td><?php echo $row['route'];?></td>
                                                <td><?php echo $row['seat'];?></td>
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

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>