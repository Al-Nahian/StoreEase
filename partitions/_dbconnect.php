<?php 

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "users";

    $connect = mysqli_connect($server, $username, $password, $database);

    if($connect){
        echo "success";
    }
    else
        die("Error");
?>