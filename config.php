<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "fischmania";

    if (isset($_GET['fischmania'])) {
        $connect = mysqli_connect($server, $user, $password, $db_name);
        
        if(!$connect){
            die("Connection Failed". mysqli_connect_error());
        }
    } else {
        echo "Database not connected (for now).";
    }

?>