<?php
include "config.php";


$sometasks = mysqli_query($connection, "SELECT * FROM tasks")


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
                <span> Welcome Edith</span>
            </span>
            <span class="buttons">
                <a href="dashboard.php">
                    <img src="img/dashboard.png" class="icon" alt="">
                    <p> Dashboard</p>
                </a>
                <a href="">
                    <img src="img/menu.png" class="icon" alt="">
                    <p> All Tasks</p>
                </a>
                <a href="">
                    <img src="img/email.png" class="icon" alt="">
                    <p> Email </p>
                </a>
                <a href="">
                    <img src="img/locked.png" class="icon" alt="">
                    <p>Logout</p>
                </a>
            </span>
        </section>
        <hr>

        <div class="float100">

                <h2><img src="img/menu.png" class="newTaskHeader" alt=""> All Tasks</h2>
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


            </div>

        </div>
    </div>
</body>
</html>