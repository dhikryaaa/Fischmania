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
        color: #cfcfcf;
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
    }

    .text {
        font-size: 1rem;
        line-height: 1.6;
        color: white;
    }

    blockquote {
        color: #ff5a5a;
        font-style: italic;
        margin: 10px 0;
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
                        As players approach Ancient Isle, a warning message appears at the bottom of the screen:
                    </p>
                    <blockquote>
                        "The sea is dangerous. Sail with caution."
                    </blockquote>
                    <p>
Suddenly, hazards such as whirlpools, spikes, and barrels of dynamite emerge from the ocean floor, inflicting damage to the player's boat. The boat starts with 100 HP and will explode if its HP reaches zero.
Steering into a whirlpool will cause the boat to sink immediately, forcing the player to navigate the waters without a vessel. Other dangers inflict a HP reduction of 10.
To avoid losing your boat, start slowing down to about 10-25s/ps once you near Ancient Isle.
At the islands, players can purchase the Phoenix Rod and Stone Rod for C$40,000 and C$3,000 respectively.
The Megalodon usually spawns around the Ancient Isle.
                    </p>
                </div>
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
                    <?php
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
                    ?>
    
                </tbody>
            </table>
        </div>
    </body>
</html>