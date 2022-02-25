<?php

session_start();

if(!isset($_SESSION['UserName'])){
header('location:login.php');

}
?>

<html>
    <head>
        <title> Home Page </title>

        <link rel="stylesheet" type="text/css" href="login.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

</head>
<body>


<div class="container"



    <a class="float-right" href="logout.php"> LOGOUT </a>
   <h1> WELCOME <?php echo $_SESSION['UserName']; ?> </h1>


   </div>
</body>
</html>