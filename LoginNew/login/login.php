<html>
    <head>
        <title>Login & sign in</title>
        <link rel="stylesheet" type="text/css" href="login.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

</head>
<body>

    <div class ="container">
        <div class="login-box">
        <div class ="row">
            <div class ="col-md-6 login-left">
                <h2> Login</h2>
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" name="user" class="form-control" required>
</div>
<div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
</div>

<br> </br>
<button type="submit" class="btn btn-primary"> Log In </button>
</form>
</div>



<div class ="col-md-6 login-right">
                <h2>Sign Up</h2>
                <form action="registration.php" method="post">
                    <div class="form-group">
                        <label>UserName</label>
                        <input type="text" name="user" class="form-control" required>
</div>
<div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
</div>
<div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
</div>

<br> </br>
<button type="submit" class="btn btn-primary"> Sign Up </button>
</form>
</div>







</div>

</div>
</body>
</html>