<?php
    require 'function.php';
    if(isset($_SESSION["id"])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form autocomplete="off" action="" method="post">
        <input type="hidden" name="action" value="register">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value=""> <br>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value=""> <br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" value=""> <br>
        <button type="submit">Register</button>
    </form>
    <br>
    <a href="login.php">Go to Login</a>
</body>
</html>
