<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "loginregister");

if (isset($_POST["action"])) {
    if ($_POST["action"] == "register") {
        register();
    } else if ($_POST["action"] == "login") {
        login();
    }
}

function register() {
    global $connect;

    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($name) || empty($username) || empty($password)) {
        echo "Please fill out the form!";
        exit;
    }

    $query = "INSERT INTO tb_user (name, username, password) VALUES ('$name', '$username', '$password')";
    mysqli_query($connect, $query);
    echo "Register Successfully"; 
}


// LOGIN

function login(){
    global $connect;  // Change $conn to $connect here

    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = mysqli_query($connect, "SELECT * FROM tb_user WHERE username = '$username'");

    if (mysqli_num_rows($user) > 0){  
        $row = mysqli_fetch_assoc($user);
        if ($password == $row["password"]){
            echo "Login Successful";
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
        }
    } else {
        echo "Wrong Password";
        exit;
    }
}
?>
