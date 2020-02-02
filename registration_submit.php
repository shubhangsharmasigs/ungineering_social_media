<?php
    $hostname = "127.0.0.1";
    $username = "root";
    $db_password = "123456";
    $db_name = "social_media";
    
    $response = array();
    $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
    if (!$conn) {

        die("Connection failed: " . mysqli_connect_error());
        $response['success'] = false;
        $response['message'] = "Connection failed: " . mysqli_connect_error();
        echo json_encode($response);
        exit();
     }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
   


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
        $response['success'] = false;
        $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo json_encode($response); //json converts the asso array into the string
        exit();
       }
    $response['success'] = true;
    $response['message'] = "Registration successful";
    echo json_encode($response);
    mysqli_close($conn);


?>
    
        <a href ="login.php">Click here</a>
        


    
       
