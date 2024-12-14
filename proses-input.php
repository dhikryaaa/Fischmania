<?php
include('config.php');

if(isset($_POST['submit'])){
    $name = $_POST['fish-name'];
    $bait = $_POST['bait'];
    $time = $_POST['time'];
    $weather = $_POST['weather'];
    $season = $_POST['season'];
    $location = $_POST['location'];

    $appearance = $_FILES['appearance']['name'];
    $temp = $_FILES['appearance']['tmp_name'];

    $path = "gambarikan/".$appearance;

    if(move_uploaded_file($temp, $path)){
        $sql = "INSERT INTO ikan (name, appearance, bait, time, weather, season, location) VALUES ('$name', '$appearance', '$bait', '$time', '$weather', '$season', '$location')";
        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: index.php');
        }
        else{
            echo "<script> alert('Data gagal dimasukkan.'); window.location.assign('form-input.php'); </script>";
        }
    }
    else{
        die("Gambar gagal di upload...");
    }
}
?>