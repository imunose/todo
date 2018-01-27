<?php


echo $id= $_GET['id'];



include "config.php";

//Check connection
//if (!$connection) {
//    die("connection object not created: " . mysqli_error($connection));
//} else {
//    echo "connected";
//}

//Save into database
$query="DELETE FROM tasks WHERE  id=$id";

mysqli_query($connection, $query);

header("Location:dashboard.php");