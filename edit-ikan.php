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
       body, html {
        width: 100%;
        height: 100vh;
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
        width: 90%; /* Increased the width to 90% */
        max-width: 1200px; /* Optional: max width to prevent the card from becoming too wide */
        height: auto;
        background-color: #3F4149;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        padding: 20px;
    }

    .table-header {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    table {
        border-collapse: collapse;
        width: 100%; /* Ensure table takes up full width of the card */
    }

    th, td {
        padding: 8px 12px; /* Increased padding for better spacing */
        text-align: left;
        border: 1px solid #1A1A1AFF;
    }

    th {
        background-color: #FFE44A;
        color: black;
    }

    tr:nth-child(even) { 
        background-color: #313131FF; 
    }

    td {
        color: white;
    }

    img {
        border-radius: 4px;
    }

    .btn-yellow, .btn-red {
        display: inline-block;
        padding: 5px 10px;
        font-size: 14px;
        font-weight: bold;
        text-decoration: none;
        text-align: center;
        cursor: pointer;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .btn-yellow {
        background-color: #FFE44A;
        color: #3F4149;
        border-radius: 8px;
    }

    .btn-red {
        background-color: #FF4A4A;
        color: white;
        border-radius: 8px;
        margin-left: 5px;
    }

    .btn-yellow:hover, .btn-red:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }
    </style>
    <script type="text/javascript">
        function confirmDelete() {
            return confirm("Apakah Anda yakin ingin menghapus data ini?");
        }
    </script>
</head>
<body>
    <div class="card">
        <header>
            <h3>Fish List</h3>
        </header>

        <div class="table-header">
            <a href="form-input.php" class="btn-yellow">Tambah Ikan</a>
        </div>

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
    
                while ($ikan = mysqli_fetch_array($query)) {
                    echo "<tr>";
    
                    echo "<td>" . $ikan['name'] . "</td>";
                    echo "<td><img src='gambarikan/" . $ikan['appearance'] . "' width='100' height='50'></td>";
                    echo "<td>" . $ikan['bait'] . "</td>";
                    echo "<td>" . $ikan['time'] . "</td>";
                    echo "<td>" . $ikan['weather'] . "</td>";
                    echo "<td>" . $ikan['season'] . "</td>";
    
                    echo "<td>";
                    echo "<a href='form-editikan.php?id=" . $ikan['id'] . "' class='btn-yellow'>Edit</a>";
                    echo "<a href='hapus-ikan.php?id=" . $ikan['id'] . "' class='btn-red' onclick='return confirmDelete()'>Delete</a>";
                    echo "</td>";
    
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    
        <p style="text-align: center;">Total: <?php echo mysqli_num_rows($query) ?></p>
        <br>
        <a href="pdf-ikan.php" class="btn-yellow">Print PDF</a>
    </div>
</body>
</html>
