//     <?php

//        session_start();


//         if(isset($_POST['register'])){

//        include 'connection.php';

//        $name=$_POST['Username'];
//        $email=$_POST['email'];
//        $password=$_POST['Password'];

//        $sql = "insert into
//         `user` (`Username`, `email`, `Password`)
//         VALUES ('$name', '$email', '$password')" ;

//        # to perform the query above 

//        $query=mysqli_query($conn,$sql);

//        if($query){
//         echo " Registrated !!";
//         #go to home code 
//         $_SESSION['Username']=$name;    # to make in page in my web access to this value 
//         header('location:home.php');
//        }
//        else{
//         echo " Try Again Please";
//        }
//      }
//     ?>

// <html>
// <head>
// <title>
//                         Register
//                 </title>
//         </head>

//    <body>
//         <div class="register">
                
//             <form method="POST">

//               <lable class="l"> Registration</lable><br>

//               <lable for="username"> User_Name : </lable> <br>
//               <input type="text" placeholder="User Name"  name="username" required><br>
//               <br>
//               <br>
//               <lable for="email"> Email : </lable> <br>
//               <input type="email" placeholder="Email"  name="email" required><br>
//               <br>
//               <br>
//               <lable for="pass"> Password : </lable><br>
//               <input type="password" placeholder="Password"  name="pass" required><br>
//               <br>
//               <br>
//               <button type=" submit " name="register">Register</button>
//               <br>
//         </form>
// </div>


// <?php
// if(isset($_POST['reg'])){
//         header('location:login.php');
// }
// ?>

// <form method="post">
//         <label>or </label>
// <button name="reg">login</button>
// </form>




//    </body>
// </html>

<html>
        <head>
                <title>
                        Register
                </title>
        </head>

   <body>
        <div class="register">
                
            <form method="POST">

              <lable class="l"> Registration</lable><br>

              <lable for="username"> User_Name : </lable> <br>
              <input type="text" placeholder="User Name"  name="username" required><br>
              <br>
              <br>
              <lable for="email"> Email : </lable> <br>
              <input type="email" placeholder="Email"  name="email" required><br>
              <br>
              <br>
              <lable for="pass"> Password : </lable><br>
              <input type="password" placeholder="Password"  name="pass" required><br>
              <br>
              <br>
              <button type=" submit " name="register">Register</button>
              <br>
             <a href="login.php">or login  </a>

            </form>
        
        </div>

    <?php

       session_start();


        if(isset($_POST['register'])){

       include 'connection.php';

       $name=$_POST['Username'];
       $email=$_POST['email'];
       $password=$_POST['Password'];

       $insert="insert into user(Username,email,Password) values('$name','$email','$password')";

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





























