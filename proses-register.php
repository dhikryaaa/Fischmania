<?php

include('config.php');

if(isset($_POST['register'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $confirmpassword = md5($_POST['confirm-password']);

    if($password != $confirmpassword){
        //check same password
        echo "<script> alert('Password tidak sama.'); window.location.assign('form-pendaftaran.php'); </script>";
    }
    else{
        //check same email
        $sql = "SELECT * FROM users WHERE email = '$email'; ";
        $query = mysqli_query($connect, $sql);

        $data = mysqli_num_rows($query);

        if($data > 0){
            echo "<script> alert('Email telah digunakan.'); window.location.assign('form-pendaftaran.php'); </script>";
        }
        else{
            $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password'); ";
            $query = mysqli_query($connect, $sql);
            echo "<script> alert('Silahkan Login menggunakan email yang telah di daftarkan.'); window.location.assign('form-pendaftaran.php'); </script>";
        }
    }
}

?>