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
      
      <form action="login.php" method="post">
        <div class="form-group">
            <input type="text" placeholder="Enter username:" name="username" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="pass" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Login" name="login" class="btn btn-primary">
        </div>
      </form>
     <div><p>Not registered yet <a href="./register.php">Register Here</a></p></div>
    </div>

    <?php
        if (isset($_POST["login"])) {
           $name = $_POST["username"];
           $password = $_POST["pass"]; 
            require_once "connection.php";
            $sql = "SELECT * FROM user WHERE username= '$name' AND pass= '$password' ";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

            $result = $conn->query($sql);
            $num_rows = mysqli_num_rows($result);

            if ( $num_rows == 0) {
                // if (password_verify($password, $user["password"])) {
                //     session_start();
                    $_SESSION["username"] =$name;
                    header("Location:home.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        // }
        ?>
</body>
</html>
