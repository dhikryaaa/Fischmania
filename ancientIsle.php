<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fischmania | Ancient Isle</title>
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
        color: #DD0996FF;
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

    span {
        font-weight: 400;
        color: #DD0996FF;
        font-style: italic;
    }

    blockquote {
        color: #ff5a5a;
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
                <h1>Ancient Isle</h1>
            </div>
            <div class="content">
                <div class="image">
                    <img src="src\ensien aisl.png" alt="Ancient Isle">
                </div>
                <div class="text">
                    <h2>Overview</h2>
                    <p>
                    <span>Ancient Isle</span> is a large island surrounded by a series of much smaller islands located in the far east of the map, far out between <span>Snowcap Island</span> and <span>Mushgrove Swamp</span>. 
                    as players approach the Ancient Isle, a warning message appears at the bottom of the screen:
                    </p>
                    <blockquote>
                        "The sea is dangerous. Sail with caution."
                    </blockquote>
                    <p>
Suddenly, hazards such as whirlpools, spikes, and barrels of dynamite emerge from the ocean floor, inflicting damage to the player's boat. The boat starts with 100 HP and will explode if its HP reaches zero.
<br><br>Steering into a whirlpool will cause the boat to sink immediately, forcing the player to navigate the waters without a vessel. Other dangers inflict a HP reduction of 10.
<br><br>To avoid losing your boat, start slowing down to about 10-25s/ps once you near Ancient Isle.
<br><br>At the islands, players can purchase the <span>Phoenix Rod</span> and <span>Stone Rod</span> for C$40,000 and C$3,000 respectively.
<br><br>The <span>Megalodon</span> usually spawns around the Ancient Isle.
                    </p><br><br>
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