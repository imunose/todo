<?php


$id = $_POST['id'];
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
$query="UPDATE tasks SET title='$title',deadline='$deadline' WHERE id=$id";

mysqli_query($connection, $query);

header("Location:dashboard.php");