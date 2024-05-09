
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <style>
        body {

            text-align:center;
        }

    </style>
<link rel="stylesheet" href="style.css">
 </head>   
 <body>
  
<h2 class="container"> welcome 
    <?php

    session_start();

   echo $_SESSION['username'];   
  ?>
  
  <br> Click here to <a href = "logout.php">logout</a>
    </h2>
 </body>   
 
 
 </html>