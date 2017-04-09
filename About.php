<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
    <!--All of included files below-->
    <link rel="stylesheet" href="CSS.css">
    <script src="Javascript/Login_buttons.js"></script>
</head>
<body>
<div class="head">

    <?php
    /*
    this code checks if you are logged in and displays the logout link if you are
    and the login and signup buttons if you aren't
    */
    include('session.php');
    if (isset($_SESSION['login_user'])){
        ?>
        <a class="logout" onclick="logout()" href="logout.php">Logout</a>
        <?php
    }
    else{
        ?>
        <button class="login" onclick="login()">Login</button>
        <button class="signup" onclick="signup()">Sign Up</button>
        <?php
    }
    ?>

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
</div>
<h2>CEO Emil Hansen</h2>
<img src="/Pics/Emil.jpg" class="CEO">

<h2>Computer Engineer Pontus Wiström</h2>
<img src="/Pics/Pontus.jpg" class="Pontus">

<h2>Senior Functionality Director Hampus Bohman</h2>
<img src="/Pics/Hampus.jpg" class="Hampus">


</body>
<footer>
    <p>Copyright &copy; 2017 Pontus Wiström, Hampus Bohman, Emil Hansen </p>
</footer>
</html>