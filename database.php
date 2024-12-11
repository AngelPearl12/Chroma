<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "reservation_system";
    $conn = "";

    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    if($conn){
        echo "Database connected";
    }else{
        echo "Failed to connect";
    }
?>