<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Login Form</title>

</head>
<body>
    <div class="container">
      <h2>

      <form action="login.php" method="post">
        <div class="form-group">
            <input type="text" placeholder="Enter username:" name="username" class="inbox">
        </div>
      </h2>

      <h3>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="pass" class="inbox">
        </div>
       </h3>
       
       <h4>
        <div class="form-btn">
            <input type="submit" value="Login" name="patsub" class="box">
        </div>
      </form>
      </h4>

      <h5>
     <div><p>Not registered yet <a href="./register.php">Register Here</a></p></div>
     </h5>
    </div>


    <!-- <?php
        if (isset($_POST["login"])) {
           $name = $_POST["username"];
           $password = $_POST["pass"]; 
            require_once "connection.php";
            $sql = "SELECT * FROM user WHERE username= '$name' AND pass= '$password';";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $result = $conn->query($sql);
            $num_rows = mysqli_num_rows($result);
            if ( $num_rows == 0) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["username"] =$name;
                    header("Location:home.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?> -->

<?php

if(isset($_POST['patsub'])){
	$email=$_POST['username'];
	$password=$_POST['pass'];
	$query="select * from user where username='$email' and pass='$password';";
    require_once "connection.php";
	$result=mysqli_query($conn,$query);
	if(mysqli_num_rows($result)==1)
	{
		while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){

      $_SESSION['username'] = $row['username'];
      $_SESSION['pass'] = $row['pass'];
        }
		header("Location:home.php");
	}
    else {
    echo("<script>alert('Invalid Username or Password. Try Again!');
          window.location.href = 'index1.php';</script>");
    // header("Location:error.php");
  }
		
}
  ?>

</body>
</html>
