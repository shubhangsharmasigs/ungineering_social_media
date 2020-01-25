<?php
    $hostname = "127.0.0.1";
    $username = "root";
    $db_password = "123456";
    $database = "social_media";

    $conn = mysqli_connect($hostname, $username, $db_password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM statuses WHERE user_id=1 ORDER BY date DESC";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
    die("Error: " . $sql . "<br>" . mysqli_error($conn));
    }
?>
<html>
    <head>
         <link rel="stylesheet" href="/social_media/css/my_profile.css">
         <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <title>My profile</title>
    </head>
    <body>
        <div  class="a">
            <div  class="a1">
                <div class="a1a">
                    <a href="http://www.ungineering.com/">    
                    <img src="img/logo.svg" height="90" width="100" alt=" "/>
                    </a>
                </div>
                <div class="a1b">    
                    <h1> <span style="color:red">un</span><span style=color:rgb(71,71,71)">gineering</span></h1>
                </div>
                <div class="a1c">
                    <h7>A <span style="color: red">bit</span> of knowledge is good. A <span style="color: red">byte</span> is better.</h7>
                </div>
                </div>
            <div  class="a2">
                <div class="a21">
                    <p><b>My dashboard</b></p>
                </div>
                <a href=logout.php>
                 <div  class="a22">
                <p><b>Logout</b></p>
                </div>
                </a>
            </div>
        </div>
        <div class="line"></div>
        <div class="b">
            <div  class="b1">
                <div  class="b1a">
                    <h2>Profile</h2>
                </div>
                <a href=edit_profile.php>
                <div  class="b1b">
                    <u><h2>Edit Profile</h2></u>
                </div>
                </a>
                
            </div>
            <div  class="b2">
                    <?php
                        while ($row=mysqli_fetch_array($result)) {
                    ?>
                    <div class="b2a">
                        <div class="b2aa"> 
                            <p>
                                <?php
                                    echo $row['status'];
                                ?>
                            </p>
                        </div>
                        <div class="b2ab">
                            <p><i>
                                <?php
                                   echo $row['date'] . " | " . $row['time'];
                                ?>
                            </i></p>
                        </div>
                    </div>
                    
                        <?php
                           }
                        ?>
            </div>
        </div>
        <div class="c">
            <div  class="c1">
                <div class="c1a">
                    <p>Connect with us at</p>
                </div>
                <div class="c1b">
                    <a href="https://www.youtube.com/channel/UCJfiRBONgZIHsMtvlvCGaqg/">
                    <img src="img/youtube logo.jpeg" height="40" width="50" alt=" "/></a>
                </div>
                <div class="c1c">
                    <a href="https://www.facebook.com/Ungineering/">
                    <img src="img/facebook logo.png" height="40" width="40" alt=" "/></a>
                </div>
            </div>
            <div  class="c2">
                <div  class="c2a">
                <p>For any questions / doubts, write us at:</p>
                </div>
                <div  class="c2b">
                <p>queries@ungineering.com</p>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
    mysqli_close($conn);
?>
                    
        
        
        
        
        
   
