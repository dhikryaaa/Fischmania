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

        .card {
            flex: 1; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 60%;
            gap: 10px;
            max-width: 800px; 
            height: auto;
            background-color: #3F4149;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        table{
            border-collapse: collapse;
            width: 100%;
        }

        th {
            padding: 8px;
            text-align: left;
            background-color: #FFE44A;
            color: black;
            border: 1px solid black;
        }

        tr:nth-child(even){background-color: #313131FF;}
        
        td {
            border: 1px solid #1A1A1AFF;
            padding: 8px;
            color: white;
        }
    </style>
</head>
<body>
    <div class="card">

    </div>
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
                echo "<a href='./form-edit.php' class='button-blue'>Edit</a> | ";
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