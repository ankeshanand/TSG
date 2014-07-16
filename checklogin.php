<?php

if(($_POST['email']=='admin@gymkhana.iitkgp.ernet.in') && ($_POST['password']=='admin'))
{
    session_start();
    $_SESSION["valid_user"] = $_POST["username"];

    header("location:post.php");
}
else{
    die("Wrong Username/Password");
    echo $_POST['email'] . " , " . $_POST['password'];
}
?>
