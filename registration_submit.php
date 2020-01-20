<?php
    $hostname = "127.0.0.1";
    $username = "root";
    $db_password = "123456";
    $db_name = "social_media";

    $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if($_POST['password']===$_POST['confirm_password'])
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        echo "Registration successful";
        
    }
    else
    {
    echo "Password doesn't match";
    
    }
    
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }
    mysqli_close($conn);
?>
