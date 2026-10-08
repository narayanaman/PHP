<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Welcome to the Home Page</h1>
    <h2>Hello, <?php echo $_SESSION['username']; ?>!</h2>
    <p>You are Logged in Successfully.</p>
    <a href="logout.php">Logout</a>
</body>
</html>