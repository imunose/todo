<?php
session_start();
error_reporting(0);
include "config.php";


$task = mysqli_query($connection, "SELECT * FROM tasks WHERE id='{$_GET["id"]}'");
while($row = mysqli_fetch_array($task))
{
    $id = $row['id'];
    $title = $row['title'];
    $deadline = $row['deadline'];
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheets/style.css">
    <title>Dashboard</title>
</head>
<body>

<div class="loginContainer">
    <div class="dashboardBody">

        <section class="menu">
            <span class="profile">
                <img src="img/user.png" height="32" alt="">
                <span> Welcome <?php echo  $_SESSION["username"]?></span>
            </span>
            <span class="buttons">
                <a href="">
                    <img src="img/new-file.png" class="icon" alt="">
                    <p> New Task</p>
                </a>
                <a href="alltasks.php">
                    <img src="img/menu.png" class="icon" alt="">
                    <p> All Tasks</p>
                </a>
                <a href="">
                    <img src="img/email.png" class="icon" alt="">
                    <p> Email </p>
                </a>
                <a href="logout.php">
                    <img src="img/locked.png" class="icon" alt="">
                    <p>Logout</p>
                </a>
            </span>
        </section>

        <div class="float100">
            <div class="newtask float40">
                <h4><img src="img/add.png" class="newTaskHeader" alt=""> Edit Task</h4>
                <form action="performUpdate.php" method="post" class="taskform">
                    <div class="inputblock">
                        <input value="<?php echo $title ?>" type="text" name="title" placeholder="Task Title">
                    </div>
                    <input type="hidden" value="<?php echo $id ?>" name="id">
                    <div class="inputblock">
                        <input value="<?php echo $deadline ?>" type="text" name="deadline" placeholder="Task Deadline">
                    </div>
                    <div class="inputblock">
                        <button type="submit">Save</button>
                    </div>
                </form>

                </section>


            </div>
        </div>
    </div>
</body>
</html>