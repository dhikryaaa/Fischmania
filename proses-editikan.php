<?php
include("config.php");

if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $bait = $_POST['bait'];
    $time = $_POST['time'];
    $weather = $_POST['weather'];
    $season = $_POST['season'];

    $appearance = $_FILES['appearance']['name'];
    $temp = $_FILES['appearance']['tmp_name'];

    if($_FILES['appearance']['error'] === 0){
        $path = "gambarikan/".$appearance;

        if(move_uploaded_file($temp, $path)){
            $sql = "UPDATE ikan SET name = '$name', appearance = '$appearance', bait = '$bait', time = '$time', weather = '$weather', season = '$season' WHERE id = $id";
        } 
        else {
            echo "<script> alert('Gambar gagal diperbarui.'); window.location.assign('form-editikan.php'); </script>";
            exit;
        }
    } 
    else {
        $sql = "UPDATE ikan SET name = '$name', bait = '$bait', time = '$time', weather = '$weather', season = '$season' WHERE id = $id";
    }

    $query = mysqli_query($connect, $sql);

    if($query){
        echo "<script> alert('Data berhasil di update.'); window.location.assign('edit-ikan.php'); </script>";
    } 
    else {
        echo "<script> alert('Data gagal di update.'); window.location.assign('form-editikan.php'); </script>";
    }
}
?>
