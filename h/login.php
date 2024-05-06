<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: login.php");
   header("Location: ####");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "connection.php";
            $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password' ";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                // if (password_verify($password, $user["password"])) {
                //     session_start();
                    $_SESSION["email"] =$email;
                    header("Location: home.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        // }
        ?>
      <form action="login.php" method="post">
        <div class="form-group">
            <input type="email" placeholder="Enter Email:" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Login" name="login" class="btn btn-primary">
        </div>
      </form>
     <div><p>Not registered yet <a href="./register.php">Register Here</a></p></div>
    </div>
</body>
</html>