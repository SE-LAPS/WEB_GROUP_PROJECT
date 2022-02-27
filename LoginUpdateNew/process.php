<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="phplogin";



$conn=new mysqli($dbhost,$dbuser,$dbpass,$db);



$username = $_POST['user'];
$password = $_POST['password'];


$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
if($username == "" && $password == ""){
    header("Location:index.html");
}
if($row['username'] == $username && $row['password'] == $password){
    echo "..Welcome to Sri-Lankan Number One Largest Online Educational Website.."  .$username . "You Are Succefully Registration...";
}
else {
    echo "<script>alert('Check your registration')</script>";
    echo "<script>location.replace('index.html')</script>";
}





?>