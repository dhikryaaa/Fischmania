<?php
session_start();

if(isset($_SESSION['id'])){
    session_destroy();

    header("Location: form-pendaftaran.php");
}
else{
    header("Location: form-pendaftaran.php");
}
?>