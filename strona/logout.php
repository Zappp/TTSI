<?php
session_start();
$_SESSION['zalogowany']= false;
session_destroy();

header("location:login.php");
setcookie('name','',time()-3000);
?>