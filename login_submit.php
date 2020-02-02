<h1><?php
    session_start();
    $hostname = "127.0.0.1";
    $username = "root";
    $db_password = "123456";
    $db_name = "social_media";
    $response = array();
    $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
    if (!$conn) {
        $response['success'] = false;
        $response['message'] = "Connection failed: " . mysqli_connect_error();
        echo json_encode($response);
        exit();
        die("Connection failed: " . mysqli_connect_error());
    }
    $name="";
    $flag=0;
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        $response['success'] = false;
        $response['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo json_encode($response);
        exit();

        die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }
    while ($row=mysqli_fetch_array($result)) {
        if($row['email']===$email && $row['password']===$password)
        {
            $flag=1;
            $name=$row['name'];
            break;
        }
    }
    if($flag===1)
    {
        $response['success'] = true;
        echo "Hello ".$name."<br/><br/>";
        $_SESSION['id']=$row['id'];
        ?></h1>
            <a href="webhomepage.php">Click Here </a>to continue
            <form action=webhomepage.php method="post">
            </form>
        <?php
    }
    else
    {
        $response['success'] = false;
        echo "Invalid Login";
        ?><br/><br/>
        <h4><a href="login.html"> Click here </a>to get back to the login page!</h4>
        <?php
    }
?>
