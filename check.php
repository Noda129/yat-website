<?php 
session_start();
$admins = array("ahmed","noha","mohamed");
if (isset($_SESSION['user'])){
    if (in_array($_SESSION['user'], $admins)){
        header("location:admin.php");
        exit();
    }
    else{
        header("location:user.php");
        exit();
    }
}
else{
    header("location:login.php");
}


?>
