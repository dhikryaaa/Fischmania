<?php

include('config.php');

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'; ";

    $query = mysqli_query($connect, $sql);

    $data = mysqli_num_rows($query);

    if($data > 0){
        $arr = mysqli_fetch_assoc($query);

        session_start();
        $_SESSION['id'] = session_id();
        $_SESSION['email'];
        $_SESSION['usertype'];

        header("Location: index.php");
    }
    else{
        echo "<script> alert('Email atau Password salah.'); window.location.assign('form-pendaftaran.php'); </script>";
    }
}

?>