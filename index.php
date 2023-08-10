<?php
    require 'function.php';
    if(isset($_SESSION["id"])){
        $id = $_SESSION["id"];
        $user = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM tb_user WHERE id = $id")); // Corrected the SQL query
    }
    else{
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php if(isset($user)): ?> <!-- Check if $user is set before using it -->
        <h1>Welcome <?php echo $user['name'];?></h1>
    <?php endif; ?>

    <a href="logout.php">Logout</a>
</body>
</html>
