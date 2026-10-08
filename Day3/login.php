<?php
    session_start();
    $username = $_POST['uname'];
    $password = $_POST['pass'];
    if($username == "admin" && $password == "admin12345"){
        session_regenerate_id(true);
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit();
    } else {
        echo "Invalid username or password";
        echo '<a href="index.php">Try Again</a>';
    }
?>
