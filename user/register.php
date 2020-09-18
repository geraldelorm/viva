<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $email = $username = $password = $confirm_password = "";
$name_err = $email_err = $username_err = $password_err = $confirm_password_err = "";

 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
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
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-signin">
      <div class="text-center">
        <a href="../index.php"><img class="mb-4" src="../assets/img/users.jpeg" alt="" width="72" height="72"></a>
        <h1 class="h3 mb-3 font-weight-normal">User Sign Up</h1>
      </div>
    <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
      <label for="inputUsername">Name</label>
      <input type="name" name="name" value="<?php echo $name; ?>" id="inputName" class="form-control" placeholder="Full Name" required autofocus>
      <span class="help-block"><?php echo $name_err; ?></span>
    </div>
  
    <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
    <label for="inputEmail">Email</label>
    <input type="email" name="email" value="<?php echo $email; ?>"id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <span class="help-block"><?php echo $email_err; ?></span>
    </div>

  <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">  
      <label for="inputUsername">Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>" id="inputUsername" class="form-control" placeholder="username" required autofocus>
      <span class="help-block"><?php echo $username_err; ?></span>
  </div>
    
  <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
      <label for="inputPassword">Password</label>
      <input type="password" name="password" value="<?php echo $password; ?>" id="inputPassword" class="form-control" placeholder="Password" required>
      <span class="help-block"><?php echo $password_err; ?></span>
  </div>

  <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
      <label for="inputPassword">Confirm Password</label>
      <input type="password" name="confirm_password" value="<?php echo $confirm_password; ?>" id="inputPassword" class="form-control" placeholder="Password" required>  
      <span class="help-block"><?php echo $confirm_password_err; ?></span>
  </div>
  <div>
    <a href="login.php">Already Signed up?</a>
  </div>
  <br>
  <button class="btn btn-lg btn-primary btn-block" type="submit" value="Submit" name="sign_up">Sign Up</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2020</p>
</form>
</body>
</html>
