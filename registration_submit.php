<?php
    $hostname = "127.0.0.1";
    $username = "root";
    $db_password = "123456";
    $db_name = "social_media";

    $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
<<<<<<< HEAD

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

=======
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
    
>>>>>>> 52a791902b47e22c87b1f94c4b7153a47830e5d5
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }
    if($confirm_password==$password){

        echo "Registration successful";}
?>
    
        <a href ="login.php">Click here</a>
<?php
    
    else {
        echo "Password does not match";
   }
    mysqli_close($conn);
?> 


    
        <form action  =dashboard_login.php method ="get">
            <input type ="hidden" name="name" value=" "/>

=======
    mysqli_close($conn);
?>
>>>>>>> 52a791902b47e22c87b1f94c4b7153a47830e5d5
