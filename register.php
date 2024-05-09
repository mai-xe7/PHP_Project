<html>
        <head>
                <title>
                        Register
                </title>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">

        </head>

   <body>
        <div class="register">
                
            <form method="POST">
                <table>
                       
              <center>
              <lable class="l"> Registration</lable><br> <br> <br>
</center>
            
<tr><lable class="" for="username"> User_Name : </lable> 
              
             &nbsp; <input type="text" placeholder="User Name"  name="username" class="inbox" required><br> </tr>
               
              <br>
             
              <tr>&nbsp;&nbsp;<lable for="email"> Email : </lable> 
             
              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<input type="email" placeholder="Email"  name="email" required class="inbox"><br> </tr>
              
              <br>

              <tr>   <lable for="pass"> Password : </lable>
              
             
              &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<input type="password" placeholder="Password"  name="pass" required class="inbox"><br> </tr>
             
              <br>

              <tr> <div class="x">
              <center><button type=" submit " name="register" class="box">Register</button><br>
              
                </center>
                </div> </tr>
              <br>
              <tr> <div class="y">
              <center>
              <a href="login.php">or login  </a> </tr>
                </center>
                </div> </tr>
                </table>
            </form>
        
        </div>

    <?php



       session_start();


        if(isset($_POST['register'])){

       include 'connection.php';

       $name=$_POST['username'];
       $email=$_POST['email'];
       $password=$_POST['pass'];

       $insert="insert into user(username,email,pass) values('$name','$email','$password')";

       # to perform the query above 

       $query=mysqli_query($conn,$insert);

       if($query){
        echo " Registrated !!";
        #go to home code 
        $_SESSION['username']=$name;    # to make in page in my web access to this value 
        header('location:home.php');
       }
       else{
        echo " Try Again Please";
       }

     }
    ?>





   </body>
</html>
