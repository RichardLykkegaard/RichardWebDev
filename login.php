<?php
require_once("config.php");

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $result = $conn->prepare("SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1");
    $result->execute();

    foreach ($result->fetchAll() as $user) {
        $_SESSION["user_id"] = $user["id"];

        # Redirect to Home
        header("Location: ./home.php");

        break;
    }
    die("Invalid password or login - please try again.");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>RichardsHome</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <link href="php-fundamentals.css" rel="stylesheet" />
  </head>
<body>
<?php
 include('Navbar.php');

?>
    <!-- CONTENT HERE -->
<br>
<div class="container">
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2>
    <br>
   <p>Please enter your email and password</p>
   </div>
    <br>
    <form action="./login.php" method="POST" id="Login">

        <div class="form-group">


            <input type="text" class="form-control" name="username" id="username" placeholder="Username">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">

        </div>
        <div class="forgot">
        <a href="register.php" class = "text-dark">Dont have a user? Create one <b>here</b></a>
        </div>
        <button href="home.php" type="submit" name="submit" class="btn btn-dark">Login</button>

    </form>
    </div>

</div></div>


    <!-- /CONTENT HERE -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
</body>
</html>