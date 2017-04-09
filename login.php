<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="CSS2.css">
</head>
<body>
<div class="head">
    <header>
        <h1 class="name">Pulsen Forum</h1>
    </header>
</div>
<div class="nav">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="Posts.php">Posts</a></li>
        <li><a href="About.php">About_Us</a></li>
    </ul>
</div>
<div class="content">

    <!--The code below sends a form to session.php with a username and password-->

    <form action="session.php" method="POST">
        <br><br><br><br><br><br><br><br><br><br><br>
        <label>Username:</label><input placeholder="Username" type="text" name="username"><br><br>
        <label>Password:</label><input placeholder="Password" type="password" name="password"><br><br>
        <input class="loginbutton" type="submit" value="Login">
    </form><br><br>
    <p class="noaccount"><a href="signup.php">Don't have an account yet? Sign up here!</a></p>
    <br><br><br><br><br><br><br>
</div>



</body>

<footer>
    <p>Copyright &copy; 2017 Pontus Wiström, Hampus Bohman, Emil Hansen </p>
</footer>
</html>