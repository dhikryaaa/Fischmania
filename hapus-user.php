<?php
include("config.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id = $id";
    $query = mysqli_query($connect, $sql);

    if($query){
        echo "<script> alert('Data User berhasil dihapus.'); window.location.assign('edit-user.php'); </script>";
    } else {
        echo "<script> alert('Data User gagal dihapus.'); window.location.assign('edit-user.php'); </script>";
    }

}
?>