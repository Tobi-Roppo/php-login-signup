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
    <title>Login</title>
</head>
<body>
    <h2>Log in</h2>
    <form autocomplete="off" action="" method="post">
        <input type="hidden" name="action" value="login">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value=""> <br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" value=""> <br>
        <button type="submit">Login</button>
    </form>
    <br>
    <a href="signup.php">Go to Register</a>
</body>
</html>
