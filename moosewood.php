<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fischmania | Moosewood</title>
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
        color: #C5560BFF;
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
        color: #C5560BFF;
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
                <h1>Moosewood</h1>
            </div>
            <div class="content">
                <div class="image">
                    <img src="src\muswud.png" alt="Moosewood">
                </div>
                <div class="text">
                    <h2>Overview</h2>
                    <p>
                        <span>Moosewood Village</span>, occasionally referred to as Moosewood, is the first island located in the Middle of the map and one of the five major islands in the game where newly joined players first spawn in. 
                        <br><br>A guide by the name of <span>Pierre</span>, who is standing near the docks can teach you the basics of the game. There is also an occasional <span>Travelling Merchant</span> who sells high powered rods and loot. 
                        <br><br>This island has coordinates 370, 134, 223.<br>
                        There are multiple NPCs in this island, an occasionally mysterious one who appears near the lighthouse and the travelling merchant. A <span>Shipwright</span> can be seen near the docks, who is level locked to 5 before you can speak to him. Going up the slope brings you to the village central where you can see the game's gamepasses. 
                        Go further and you should be able to see Phineas near the bench, speak to him and he gives you a quest to catch 10 fishes using bait. On the left is the Merchant's hut, the Appraiser and the Innkeeper, who you can buy a room from and set your spawn point. Buying a room from him sets your spawn point, every island has an innkeeper.
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