<?php
session_start();

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];



include "config.php";

//Check connection
//if (!$connection) {
//    die("connection object not created: " . mysqli_error($connection));
//} else {
//    echo "connected";
//}

//Save into database


$query = "SELECT username FROM users WHERE username = '$username'";
$result = mysqli_query($connection, $query);
echo mysqli_num_rows($result);


if(mysqli_num_rows($result)>0) {
    header("Location:signup.php?error=Credentials already used another person");
}

$query = "INSERT INTO users(name,username,email,password) VALUES ('$name','$username','$email','$password')";
$result = mysqli_query($connection, $query);
$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
header("Location:dashboard.php");