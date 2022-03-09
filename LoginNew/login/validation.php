<?php

session_start();

$con=mysqli_connect('localhost');

mysqli_connect_db($con,'newuser');

$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];


$s ="select * from updateusertable where name = '$UserName' && password = '$Pass'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1){

    $_SESSION['UserName'] = $name;
    
    header('location:home.php');
}

else{
    header('location:login.php');
    
}
?>