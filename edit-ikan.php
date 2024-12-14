<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Fish Fischmania</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Martian+Mono:wght@100..800&display=swap" rel="stylesheet">
    <style>
        body,html{
            width: 100%;
            height: 100vh;
            font-family: Arial, sans-serif;
            font-family: "Martian Mono", monospace;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            font-variation-settings: "wdth" 100;
            color: white;
            background: url(src/bintang=bintang.png);
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <header>
        <h3>Fish List</h3>
    </header>

    <table>
        <thead>
        <tr>
            <th>Fish Name</th>
            <th>Appearance</th>
            <th>Bait</th>
            <th>Time</th>
            <th>Weather</th>
            <th>Season</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM ikan";

            $query = mysqli_query($connect, $sql);

            while($ikan = mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>".$ikan['name']."</td>";
                echo "<td><img src='gambarikan/".$ikan['appearance']."' width='100' height='100'></td>";
                echo "<td>".$ikan['bait']."</td>";
                echo "<td>".$ikan['time']."</td>";
                echo "<td>".$ikan['weather']."</td>";
                echo "<td>".$ikan['season']."</td>";

                echo "<td>";
                echo "<a href='' class='button-blue'>Edit</a> | ";
                echo "<a href='' class='button-red' onclick='return confirmDelete()'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <p style="text-align: center;">Total: <?php echo mysqli_num_rows($query) ?></p>

</body>
</html>