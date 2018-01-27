<?php
session_start();
error_reporting(0);
include "config.php";


$sometasks = mysqli_query($connection, "SELECT * FROM tasks ORDER BY id DESC  LIMIT 4 ");
if(isset($_GET['email'])){
    echo "<script>alert('Email Sent')</script>";
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
                    <img src="img/dashboard.png" class="icon" alt="">
                    <p> Dashboard</p>
                </a>
                <a href="alltasks.php">
                    <img src="img/menu.png" class="icon" alt="">
                    <p> All Tasks</p>
                </a>
                <a href="sendmail.php">
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
                <h4><img src="img/add.png" class="newTaskHeader" alt=""> New Task</h4>
                <form action="savetask.php" method="post" class="taskform">
                    <div class="inputblock">
                        <input type="text" name="title" placeholder="Task Title">
                    </div>
                    <div class="inputblock">
                        <input type="text" name="deadline" placeholder="Task Deadline">
                    </div>
                    <div class="inputblock">
                        <button type="submit">Save</button>
                    </div>
                </form>

                </section>


            </div>
            <div class="newtask float40" style="margin-left: 4em">
                <h4><img src="img/refresh.png" class="newTaskHeader" alt=""> Recent Tasks</h4>
                <div>
                    <ul class="tasks">
                        <?php
                        if ($sometasks->num_rows > 0) {
                            // output data of each row
                            while ($row = $sometasks->fetch_assoc()) {
                                echo '<li>
                                <a href="">
                                           <p class="tasktitle">  ' . $row["title"] . '</p>
                                </a>

                                   <span class="small" >' . $row["deadline"] . '</span><br>
                                   
                                   <a href="edit.php?id='.$row["id"].'" class="editButton">Edit</a>
                                    <a onclick="return confirm(\'Are you sure you want to delete this todo?\');" href="delete.php?id='.$row["id"].'"  class="deleteButton">Delete</a>
                              
                              </li>';
                            }
                        }
                        ?>
                    </ul>
                </div>

                </section>


            </div>

        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>