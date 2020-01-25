<?php
    $hostname = "127.0.0.1";
    $username = "root";
    $db_password = "123456";
    $database = "social_media";

    $conn = mysqli_connect($hostname, $username, $db_password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    session_destroy();
    header("location:webhomepage.php")
?>
