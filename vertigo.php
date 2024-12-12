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
        color: #97221AFF;
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
        color: #97221AFF;
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
                <h1>Vertigo</h1>
            </div>
            <div class="content">
                <div class="image">
                    <img src="src\vertigo.png" alt="Vertigo">
                </div>
                <div class="text">
                    <h2>Overview</h2>
                    <p>
                    <span>Vertigo</span>, also known as <span>The Great Abyss</span>. Is a cave hidden under the world with glowing crystals. 
                    <br><br>It's only entrance is a <span>Strange Whirlpool</span> and its only exit is by dying, leaving the game or consuming a <span>Conception Conch</span>. 
                    <br><br>Upon entering, you are met with a dark cave whose only light source are the glowing crystals on its walls. The structure of the cave itself is very steep.
                    <br><br>Near the spawn point for Vertigo, there is a small stall where Synth resides. Synth acts as the <span>Merchant</span> of Vertigo, buying fish and selling the <span>Nocturnal Rod</span> for C$11,000, <span>Conception Conch</span> for C$444 each, and the <span>Aurora Rod</span> for C$90,000 (During <span>Aurora Borealis</span>). 
                    <br>In Vertigo, he interacts with the player, even seeming upbeat and energetic.
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