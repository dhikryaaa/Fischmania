<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "fischmania";

    $connect = mysqli_connect($server, $user, $password, $db_name);

    if(!$connect){
        die("Connection Failed". mysqli_connect_error());
    }
?>