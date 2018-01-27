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
<form action="performLogin.php" method="post">
    <div class="loginContainer">
        <div class="loginBody">
           <div style="text-align: center;">
               <img src="img/cloud-computing.png"  height="128" alt="">
           </div>
            <div class="header">Login</div>
            <?php
                if(isset($_GET['error'])){
                    echo "<p style='color: red;'>{$_GET['error']}</p>";
                }
            ?>
            <div class="inputblock">
                <input type="text" name="username" placeholder="Enter Username">
            </div>
            <div class="inputblock">
                <input type="password" name="password" placeholder="Enter Password">
            </div>
            <div class="inputblock">
               <button type="submit">Login</button>
            </div>
            <p style="text-align: center">Dont have an account? <a href="signup.php">Signup</a></p>
        </div>
    </div>
</form>
</body>
</html>