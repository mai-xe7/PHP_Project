
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

 </head>   
 <body>
  
<h2> welcome 
    <?php

    session_start();

   echo $_SESSION['username'];   
  ?>
  </h2>
    Click here to <a href = "logout.php">logout</a>
 </body>   
 
 
 </html>