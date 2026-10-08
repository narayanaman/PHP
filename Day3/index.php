<?php
    session_start();
    if(isset($_SESSION['username'])){
        header("Location: home.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <div class="row">

            <label for="uname">Username</label>
            <input type="text" name="uname" id="uname">
        </div>
        <div class="row">
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass">
        </div>
        <div class="row">
            <input class="btn" type="submit" value="Login">
        </div>
    </form>
</body>
</html>