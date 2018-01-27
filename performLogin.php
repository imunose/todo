<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];



include "config.php";

//Check connection
//if (!$connection) {
//    die("connection object not created: " . mysqli_error($connection));
//} else {
//    echo "connected";
//}

//Save into database

$query = "SELECT password FROM users WHERE username = '$username'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_row($result);
echo $row[0];

if ($row[0] === $password){
    //Match - Case sensitive
    // Set session variables
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
    header("Location:dashboard.php");
} else {
    header("Location:index.php?error=Invalid username or  password");
}
mysqli_close($connection);