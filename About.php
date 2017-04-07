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
<a class="logout" onclick="logout()" href="../../Downloads/logout.php">Logout</a>
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
        <li><a href="../../Downloads/Posts.php">Posts</a></li>
        <li><a href="About.php">About_Us</a></li>
    </ul>
</div>
<div class="content">
</div>


</body>
<footer>
   <p>Copyright &copy; 2017 Pontus Wiström, Hampus Bohman, Emil Hansen </p>
</footer>
</html>