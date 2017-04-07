<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Posts</title>
    <link rel="stylesheet" href="CSS.css">
    <script src="Javascript/Login_buttons.js"></script>
  <?php
    /* takes all the information about the uploaded file and puts it in separate variables */ 
    if (isset($_FILES['image'])) {
        $errors = array();
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $tmp = explode('.', $file_name);
        $file_ext = strtolower(end($tmp));
      
        /* an array with allowed file types */
        $extensions = array("jpeg", "jpg", "png", "gif");
        /* checks if the file uploaded is allowed */
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
        } /* if there are no errors it moves the file to the "uploads" folder and changes it´s name to a timestamp */
        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "uploads/" . (2000000000-time()) . "." . $file_ext);


        } else {
            print_r($errors);
        }
    }

    ?>
   
</head>
<body>
<div class="head">

<?php 
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



<?php 
include('session.php');
if (isset($_SESSION['login_user'])){
?>
<!-- this is the HTML form for the upload function -->
    <form action = "" method = "POST" enctype = "multipart/form-data">
    <input type = "file" name = "image" />
    <input type = "submit"/>
    </form>
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
<div class="uploadimg">

 <?php

    $files = glob("uploads/*.*");

    for ($i = 0; $i < count($files); $i++) {

        $image = $files[$i];
      

        echo '<img src="' . $image . '" alt="Random image" />' . "<br /><br />";
    }

    ?>

</div>



</body>

<footer>
   <p>Copyright &copy; 2017 Pontus Wiström, Hampus Bohman, Emil Hansen </p>
</footer>
</html>