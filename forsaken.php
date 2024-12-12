<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Martian+Mono:wght@100..800&display=swap" rel="stylesheet">
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
        color: #FFBB00FF;
        margin-bottom: 20px;
    }

    .content {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 8%;
    }

    .image img {
        width: 100%;
        border-radius: 10px;
        margin-bottom: 20px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
    }

    .text {
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
        color: #FFBB00FF;
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
                <h1>Forsaken Shores</h1>
            </div>
            <div class="content">
                <div class="image">
                    <img src="src\forsaken.png" alt="Depths">
                </div>
                <div class="text">
                    <h2>Overview</h2>
                    <p>
                    <span>Forsaken Shores</span> is an island added on the 1.05.0 update. It is a part of the <span>Forsaken Shores Expansion Update</span>, the island is located southwest of Roslit Bay.
                    <br><br>Its GPS coordinates: X: -2427, Y: 133, Z: 1557.
                    <br><br>Upon arriving at the pirate-themed island, the player will see a skull shaped cave at the center with small sea stacks surrounding the island. A new merchant named Cort also inhabits the island. There is also a NPC named <span>Jack Marrow</span> in the skull shaped cave. You can repair your Treasure Map on him and buy the <span>Scurvy Rod</span>.
                    <br><br>Forsaken Shores has 11 types of fish in total, 2 Common, 2 Uncommon, 2 Unusual, 2 Rare, 1 Legendary and 2 Mythical. Completing the Forsaken Shores Bestiary will grant the player the Pirate Wheel Bobber or Skull Bobber.
                    <br><br>It is recommended to grind <span>Captain's Goldfish</span> in the pond under the waterfall using a rod with high luck stats such as Mythical Rod, or if you're a beginner, Fortune Rod, and to use Truffle Worms (their preferred bait). You can also grind these fish for good XP.
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