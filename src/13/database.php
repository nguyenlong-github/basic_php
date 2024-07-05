<?php
    $db_server = "localhost";
    $db_user = "user";
    $db_pass ="user";
    $db_name = "businessdb";
    $conn ="";

    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    if($conn){
        echo "Connected <br>";

    }else{
        echo "Failed";
    }
?>