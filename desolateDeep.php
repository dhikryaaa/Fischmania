<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fischmania | Desolate Deep</title>
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
        color: #485FE2FF;
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
        color: #485FE2FF;
        font-style: italic;
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
                <h1>Desolate Deep</h1>
            </div>
            <div class="content">
                <div class="image">
                    <img src="src\desolate.png" alt="Desolate Deep">
                </div>
                <div class="text">
                    <h2>Overview</h2>
                    <p>The <span>Desolate Deep</span> is located behind <span>Sunstone Island</span>. Go back until you find a Buoy at (-791 142 -3102.8) where you can find a trench and dive down. You'll need either the <span>Basic Diving Gear</span> or the <span>Advanced Diving Gear</span> to avoid drowning. Swim down to the hole and keep going until you find the cave. It is recommended to turn on "Higher Brightness" in the Menu section for brighter and better view in case you cannot see any things while diving to <span>Desolate Deep</span>.
                        Once you dive down to the bottom of the hole, you can see a split passage with a sign warning people to get a proper diving gear. You can either pick to go left or right, but right is highly recommended.
                        <br><br>Making contact with any of the naval mines within the passages will cause them to explode and instantly kill the player. The naval mines can often blend with the darkness of the stone, it is recommended to have a lantern, swim close to the floor and keep your eyes peeled in order to avoid death.</p>
                    </p>
                    <p>
                    When you follow the right side of the cave, you will pop up in the <span>Desolate Pocket</span> where you will see a small cave island that are inhabited by the <span>Merchant</span> and 2 other NPCs.<br><br> In order to get to <span>Brine Pool</span>, you need to buy a <span>Glider</span> or a <span>Tidebreaker</span>. 
                    After that, look for one of the NPCs who will be holding a lantern, swim the way his lantern is facing, and you will come out to a rocky platform. Climb up and head to the right, and upon the sloped bit get to the tallest part of it then jump and equip your glider, going straight and a bit to the left then take a right onto a crevice. After this, follow the path and you have made it to the <span>Brine Pool</span>. You will need the <span>Reinforced Rod</span> to fish here.
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