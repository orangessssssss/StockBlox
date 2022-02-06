<?php
    // Enter your host name, database username, password, and database name.
    $con = mysqli_connect("hostname","username","password","dbname");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
