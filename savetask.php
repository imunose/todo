<?php


$title = $_POST['title'];
$deadline = $_POST['deadline'];



include "config.php";

//Check connection
//if (!$connection) {
//    die("connection object not created: " . mysqli_error($connection));
//} else {
//    echo "connected";
//}

//Save into database

$query="INSERT INTO tasks(title,deadline) VALUES('$title','$deadline')";

mysqli_query($connection, $query);

header("Location:dashboard.php");



