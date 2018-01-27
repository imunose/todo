<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="stylesheets/style.css">
    <title>Home</title>
</head>
<body>
<form action="performSignup.php" method="post">
    <div class="loginContainer">
        <div class="loginBody">
            <div style="text-align: center;">
                <img src="img/user.png"  height="128" alt="">
            </div>
            <div class="header">Sign Up</div>
            <?php
            if(isset($_GET['error'])){
                echo "<p style='color: red;'>{$_GET['error']}</p>";
            }
            ?>
            <div class="inputblock">
                <input type="text" name="name" placeholder="Enter Fullname">
            </div>

            <div class="inputblock">
                <input type="text" name="username" placeholder="Enter Username">
            </div>
            <div class="inputblock">
                <input type="email" name="email" placeholder="Enter Email">
            </div>
            <div class="inputblock">
                <input type="password" name="password" placeholder="Enter Password">
            </div>
            <div class="inputblock">
                <button type="submit">Signup</button>
            </div>
            <p style="text-align: center">Already have an account? <a href="index.php">Login</a></p>
        </div>
    </div>
</form>
</body>
</html>