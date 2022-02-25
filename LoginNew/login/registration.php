<?php

session_start();
header('location:login.php');

$con=mysqli_connect('localhost');

mysqli_connect_db($con,'newuser');

$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];



$s ="select * from updateusertable where name = '$UserName'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo" User Name  Already Taken";
}

else{
    $reg="insert into usertable (User_Name , E-mail , Password) values('$UserName' , '$Email' ,'$Password')";
    mysqli_query($con,$reg);
    echo"Registration Successfully";
}
?>