<?php
    session_start();
    if(isset($_SESSION['id']) && $_SESSION['id']) 
    // $name=$_GET['name'];
    //$name=$_COOKIE['name'];
    $name=$_SESSION['name'];
?>
