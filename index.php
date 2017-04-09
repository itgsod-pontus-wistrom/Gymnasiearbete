<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" href="CSS2.css">
    <script src="Javascript/Login_buttons.js"></script>
</head>
<body>
<div class="head">
    <header>
        <h1 class="name">Pulsen Forum</h1>
    </header>

    <?php
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



</div>
<div class="nav">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="Posts.php">Posts</a></li>
        <li><a href="About.php">About_Us</a></li>
    </ul>
</div>


<div class="content">
    <p>Welcome to our website!</p><br>
    <p>Here you will find information<br>about the other pages on the site</p><br>
    <p>Under the posts section<br>you will be able to look at images<br> uploaded by other people<br>as well as upload your own<br>if you register and log in.</p><br>
    <p>Under the "About Us" section<br>you will be able to see a picture of us<br>the creators of this website<br>and read a small snippet of information about us.</p>
</div>
</body>

<footer>
    <p>Copyright &copy; 2017 Pontus Wiström, Hampus Bohman, Emil Hansen </p>
</footer>

</html>