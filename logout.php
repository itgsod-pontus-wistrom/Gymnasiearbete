<?php

/*
This code is activated when you press the logout button
it logs ot the current user by killing the session and unsetting it
it then brings you back to index.php
*/

include ("session.php");
session_destroy();
if(isset($_SESSION['login_user']))
    unset($_SESSION['login_user']);
header("location: index.php");
?>