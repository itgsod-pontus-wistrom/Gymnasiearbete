<?php
/*
this code recieved the data from the form in login.php
*/
session_start();
$username = $_POST["username"];
$pass = $_POST["password"];

/*
it then connects to the logins.sqlite database
*/

if($username != "" && $pass != "") {
    $dir = "sqlite:./Database/logins.sqlite";
    $dbh = new PDO($dir) or die("cannot open the database");
    $check;

    /*
    below sets the value of a variable $check to the value of password where username == $username
    in the logins table in logins.sqlite
    */

    foreach ($dbh->query("SELECT password FROM logins WHERE username = '$username';") as $row) {
        $check = json_encode($row[0]);
    }

    /*
    below is checks to see if the password you entered is the correct one for the username
    and logs you in and redirects you to index.php if it is and redirects you back to login.php if it isn't
    */

    if ($username != null && $check == "\"".$pass."\""){
        header("location: index.php");
        echo "You are now logged in";
        $_SESSION['login_user']=$username;
    }
    else{
        header("location: login.php");
        echo "Login Failed!";
    }
}


?>