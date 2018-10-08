<?php


session_start(); //start the PHP session function
$un= "saef";
$pw = "pass";
if($_POST['un']== $un && $_POST['pw'] == $pw) {
   
    $_SESSION['un']=$un;
    header("location:Home.php");
}
else
{
    echo "wrong username and password";
    echo "<a href='index.php'> Go back</a>";
}
?>

   