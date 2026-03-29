<?php
include "db.php";

$name = $_POST["name"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO users (name, email, username, password)
          VALUES ('$name', '$email', '$username', '$hashedPassword')";

if (mysqli_query($conn, $query)) {
    header("Location: login.html");
} else {
    echo "Registration failed";
}
?>
