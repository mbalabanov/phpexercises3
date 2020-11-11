
<?php 

    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "restaurant";


    $connect = new  mysqli($localhost, $username, $password, $dbname);

    // check connection
    if($connect->connect_error) {
        die("connection failed: " . $connect->connect_error);
    } else {
        // echo "<h4>Successfully Connected</h4>";
    }

?>