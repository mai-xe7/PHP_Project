<?php

$host="localhost";
$user="root";
$password="";
$db="db";

$conn=mysqli_connect($host,$user,$password,$db);

$insert="insert into user value()";

if($conn){
    echo "connected successfully";
}
else{
    echo "invalid connection ";
}

if(isset($_POST['signUp'])){

}

?>