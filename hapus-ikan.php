<?php
include("config.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];

    $sql = "DELETE FROM ikan WHERE id = $id";
    $query = mysqli_query($connect, $sql);

    if($query){
        echo "<script> alert('Data Ikan berhasil dihapus.'); window.location.assign('edit-ikan.php'); </script>";
    } else {
        echo "<script> alert('Data Ikan gagal dihapus.'); window.location.assign('edit-ikan.php'); </script>";
    }

}
?>