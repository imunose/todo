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
            <h2>Dashboard</h2>
            <div class="buttons">
                <a href="">
                    <img src="img/new-file.png" class="icon" alt="">
                    <p> New Task</p>
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
            </div>


        </section>

        <section class="recent">

            <h2>Recent Tasks</h2>

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

                                   <p class="smaall" >' . $row["deadline"] . '</p>
                              
                              </li>';
                        }
                    }
                    ?>
                </ul>
            </div>
        </section>

    </div>
</div>
</body>
</html>