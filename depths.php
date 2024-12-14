<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fischmania | The Depths</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Martian+Mono:wght@100..800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="src/fischmania-logo 1.png">
    <style>
      body {
        margin: 0;
        font-family: "Martian Mono", monospace;
        background-image: url(./src/bgikanikanbanyak.png);
    }

    .container {
        background-color: #222222;
        margin: 20px auto;
        padding: 20px;
        border-radius: 10px;
        width: 90%;
        max-width: 900px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
        height: 100%;
    }

    .title h1 {
        text-align: center;
        font-size: 2rem;
        color: #59F2A1;
        margin-bottom: 20px;
    }

    .content {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 8%;
    }

    .image img {
        max-width: 100%;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
    }

    .text {
        text-shadow: 2px 2px 4px black;
        font-weight: 200;
        font-size: 1rem;
        line-height: 1.6;
        color: white;
    }

    blockquote {
        color: #ff5a5a;
        font-style: italic;
        margin: 10px 0;
    }

    span {
        font-weight: 400;
        color: #59F2A1;
        font-style: italic;
        margin: 10px 0;
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
        <div class="container">
            <div class="title">
                <h1>Depths</h1>
            </div>
            <div class="content">
                <div class="image">
                    <img src="src\depths.png" alt="Depths">
                </div>
                <div class="text">
                    <h2>Overview</h2>
                    <p>
                    <span>The Depths</span> is an area hidden in <span>Vertigo</span> with glowing red crystals. Its only entrance is a door near red gems, which will only open if the player has 100% Bestiary in Vertigo and has obtained The Depths Key.
After opening the gate, the player will need to do an obby with falling platforms. <br><br> The player can leave The Depths by backtracking through the obby or using a Conception Conch. Upon entering, the player is met with a dark cave where the only light source are the glowing crystals on its walls. The structure of the area itself is very steep.
The gate to enter The Depths will stay open after leaving. <br><br> The gate is client-sided, meaning only the one who opened the gate will be the only one to enter.
If you use The Depths Key in a private server to open the door, you will no longer need another key to open the gate when you rejoin the server. This feature is now implemented across all public servers as of November 23, 2024.
Additionally, there is a boosted catch rate for Enchant Relics in The Depths.
                    </p>
                </div><br><br>
                <table>
                    <thead>
                        <tr>
                            <th>Fish Name</th>
                            <th>Appearance</th>
                            <th>Bait</th>
                            <th>Time</th>
                            <th>Weather</th>
                            <th>Season</th>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- infokan backend min -->
                    <!-- <?php
                    $sql = "SELECT * FROM calon_siswa";
                    $query = mysqli_query($db, $sql);
    
                    while($siswa = mysqli_fetch_array($query)){
                        echo "<tr>";
    
                        echo "<td>".$siswa['fish_name']."</td>";
                        echo "<td>".$siswa['appearance']."</td>";
                        echo "<td>".$siswa['bait']."</td>";
                        echo "<td>".$siswa['time']."</td>";
                        echo "<td>".$siswa['weather']."</td>";
                        echo "<td>".$siswa['season']."</td>";
    
                        echo "</tr>";
                    }
                    ?> -->
    
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>