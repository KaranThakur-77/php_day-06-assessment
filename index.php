<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h1 align="center">Login To Proceed</h1>
            <form action="home.php" method="post">
                <label for="uname">Username:</label>
                <input type="text" placeholder="Username." name="name" class="txtArea"><br>
                <label for="password">Password:</label>
                <input type="password" placeholder="Password." name="pass" class="txtArea"><br>
                <div class="button">
                <button name="submit" class="btn">Sign In</button>
                <button name="submit" class="btn1">Sign Up</button>
                </div>
            </form>
            <p class="footer">&copy;Karan Thakur@All rights reserved.</p>
        </div>
        <div class="imgBox">
                <img src="img.png" alt="image" class="image">
        </div>
    </div>
</body>
</html>