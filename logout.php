<?php
session_start();
if (isset($_SESSION['user'])){
 session_unset();
 session_destroy();
 header("refresh:.5;url=mainyat.html");
}
else{
    header("location:login.php");
}
?>
