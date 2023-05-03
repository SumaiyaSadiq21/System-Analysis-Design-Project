<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="login_page/login.css">
</head>
<body>
    

    <div class="container">
        <div class="logo">
            <h1>ASCLEPIUS</h1>
        </div>
        <form action="verifyuser.php" method="POST">
            <h1>LOGIN</h1>
            <div class="form-group">
                <input type="email" id="uid" name="uemail" placeholder="ENTER YOUR USERNAME" title="Please fill out this field" class="form-control" required>
                <input type="password" id="upass" name="upass" placeholder="ENTER YOUR PASSWORD" title="Please fill out this field" class="form-control" required>
                <input type="submit" class="btn" value="LOG IN">
            </div>
            <div class="bottom-text">
                <a href="#">FORGOT PASSWORD?</a>
            </div>  
        </form>
        <br>
        <h4>      Dont have a account?  <a href="signup.php">sign Up here</a> </h4>
    </div>
    <br>
    <br>
    <a href="Admin.php">Admin Login</a>
    

</body>
</html>
