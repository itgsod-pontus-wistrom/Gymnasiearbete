


<?php
try {
    $db = new PDO('Database/logins.sqlite');

    $Username = $_POST["user_name"];
    $Password = $_POST["user_pass"];
    $Email = $_POST["user_email"];

    $db->exec("INSERT INTO feedback (Username, Password, Email) VALUES ('&Username', '&Password','&Email');");

}
catch(PDOException $e)
{
    print 'Exception : ' .$e->getMessage();
}
?>