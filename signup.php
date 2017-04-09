<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="CSS2.css">
    <script src="Javascript/Footer.js"></script>
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
<div class="container">

    <!--sends a form with signup infomation to the php later in the file-->

    <form type="submit" method="POST" action=""><br><br><br><br><br><br><br>
        <label>Username:</label><input type="text" placeholder="Enter Username" name="user_name" id="user_name" /><br><br>
        <label>Password:</label><input type="password" placeholder="Enter Password" name="user_pass" id="user_pass"><br><br>
        <label>Password again:</label><input type="password" placeholder="Confirm Password" name="user_pass_check"><br><br>
        <label>E-mail:</label><input type="email" placeholder="Enter E-mail" name="user_email" id="user_email"><br><br>
        <input class="signupbutton" type="submit" value="Sign Up" /><br><br><br><br><br><br><br><br><br><br><br>
    </form>
</div>

<?php

/*
catches the information from the form and sets variables to them
*/

$username = $_POST["user_name"];
$pass = $_POST["user_pass"];
$passcheck = $_POST["user_pass_check"];
$email = $_POST["user_email"];

/*
connects to logins.sqlite
*/

$dir = "sqlite:./Database/logins.sqlite";
$dbh = new PDO($dir) or die("cannot open the database");

/*
if you passwords are the same if gets out insterted into logins.sqlite
since email and username must be unique in logins.sqlite if you enter
one that is already in use it won't get inserted
*/

if ($passcheck == $pass)
    $dbh ->exec("INSERT INTO logins (username, password, email) VALUES('$username', '$pass', '$email')");
else
    echo "Passwords did not match";
end
?>



</body>

<footer>
    <p>Copyright &copy; 2017 Pontus Wiström, Hampus Bohman, Emil Hansen </p>
</footer>
</html>