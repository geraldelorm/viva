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
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $bus = $_POST['bus'];
     $route = $_POST['route'];
     $seat = $_POST['seat'];
 
     $sql = "INSERT INTO bookings (name,email,bus,route,seat)
     VALUES ('$name','$email','$bus','$route','$seat')";
 
     if (mysqli_query($link, $sql)) {
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($link);
     }
     mysqli_close($link);
}
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

    <style type="text/css">
</style>

  </head>
  <header>
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
  <a class="btn" href="welcome.php"><h3>Welcome, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h3></a>    
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
  <br>
  <br>

  <body>
  <div  class="table-responsive container">
            <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">MAKE A RESERVATION NOW</h4>
                                <form method="post">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Your Name</label>
                                                    <input type="text" name="name" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Enter Your Email</label>
                                                    <input type="email" name="email" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Bus Name</label>
                                                    <input type="text" name="bus" class="form-control" placeholder="Toyata Bus(large size)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Enter Route</label>
                                                    <input type="text" name="route" class="form-control" placeholder="FROM - TO">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Choose Seat</label>
                                                    <input type="text" name="seat" class="form-control" placeholder="NO. OF SEATS IN THE BUS">
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="card-title">PAYMENT MODULE</h4>
                                        <div>
                                            <label >Currency</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                            <option>GHS</option>
                                            <option>USD</option>
                                            <option>EURO</option>
                                            <option>GBP</option>
                                            <option>YUAN</option>
                                            </select>
<br>
                                            <div>
                                            <label>Price</label>
                                            <input type="text">
                                            <img class="rounded-circle" width="100" height="100" src="../assets/img/visa.png" alt="">
                                            <img class="rounded-circle" width="100" height="100" src="../assets/img/master.jpg" alt="">
                                        </div>
                                        </div>

                                        <br>
                                    <div class="form-actions">
                                        <div>
                                            <a type="submit" name="submit" value="Submit" href="reservations.php" class="btn btn-info">Book</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>