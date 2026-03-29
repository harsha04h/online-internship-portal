<?php
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user["password"])) {

        $_SESSION["username"] = $user["username"];
        $_SESSION["fullname"] = $user["name"];

        header("Location: homepage.html");
        exit();

    } else {

        header("Location: login.html?error=1");
        exit();

    }
}
?>