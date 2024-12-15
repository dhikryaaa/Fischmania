<?php
include("config.php");

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $confirmpassword = md5($_POST['confirm-password']);

    //check same password
    if ($password != $confirmpassword) {
        echo "<script> alert('Password tidak sama.'); window.location.assign('form-edituser.php'); </script>";
    } else {
        //check same email
        $sql = "SELECT email FROM users WHERE id = $id;";
        $query = mysqli_query($connect, $sql);

        if ($query) {
            $currentUser = mysqli_fetch_assoc($query);
            $currentEmail = $currentUser['email'];

            //check email change
            if ($email != $currentEmail) {
                //check same email in db
                $checkEmailSql = "SELECT * FROM users WHERE email = '$email';";
                $checkEmailQuery = mysqli_query($connect, $checkEmailSql);

                if (mysqli_num_rows($checkEmailQuery) > 0) {
                    echo "<script> alert('Email telah digunakan.'); window.location.assign('form-edituser.php'); </script>";
                    exit;
                }
            }

            $updateSql = "UPDATE users SET email = '$email', password = '$password' WHERE id = $id;";
            $updateQuery = mysqli_query($connect, $updateSql);

            if ($updateQuery) {
                echo "<script> alert('Akun berhasil diperbarui.'); window.location.assign('edit-user.php'); </script>";
            } else {
                echo "<script> alert('Gagal melakukan Update Akun, Coba kembali.'); window.location.assign('form-edituser.php'); </script>";
            }
        } else {
            echo "<script> alert('Gagal mengambil data pengguna.'); window.location.assign('form-edituser.php'); </script>";
        }
    }
}
?>
