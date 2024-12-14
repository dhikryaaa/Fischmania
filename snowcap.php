<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fischmania | Snowcap Island</title>
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
        color: #61C5FFFF;
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
        color: #61C5FFFF;
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
                <h1>Snowcap Island</h1>
            </div>
            <div class="content">
                <div class="image">
                    <img src="src\snowcap.png" alt="Roslit Bay">
                </div>
                <div class="text">
                    <h2>Overview</h2>
                    <p>
                    <span>Snowcap Island</span> is a freezing island located Southeast of <span>Moosewood</span>. It features large glaciers and frozen peaks. 
                    <br><br>The island is enormous yet few <span>NPCs</span> live there due to its harsh climate. <span>Snowcap Island</span> is surrounded by ice spikes and ice sheets that make navigating to land difficult. Two docks are located off the northwest section of the island. 
                    <br><br>There is a locked hut beside the merchant's hut with a skeleton inside. There is no clear way or reason to unlock this hut.
                    <br><br><br><span>Snowcap Cave</span>
                    <br><br>This mysterious cave has three different entrances that may prove hard to find, the most common entrance is just around the left side (picture) of the mountain, it can be identified by the large opening in the rock. 
                    The second and third are close together and are found by traveling along the right side of the mountain. 
                    The cavern contains the <span>Windset Totem</span> which you can purchase for C$2,000, upon using the item it will change the weather event to windy. The cave has a regular abundance of <span>Glacierfish</span> and <span>Ringle</span>, making it great for fishing.
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
                       
                    <?php
                        $sql = "SELECT * FROM `ikan` WHERE location = 'Snowcap Island'";
                        $query = mysqli_query($connect, $sql);
        
                        while($ikan = mysqli_fetch_array($query)){
                            echo "<tr>";
        
                            echo "<td>".$ikan['name']."</td>";
                            echo "<td><img src='gambarikan/".$ikan['appearance']."' width='150' height='100'></td>";
                            echo "<td>".$ikan['bait']."</td>";
                            echo "<td>".$ikan['time']."</td>";
                            echo "<td>".$ikan['weather']."</td>";
                            echo "<td>".$ikan['season']."</td>";
        
                            echo "</tr>";
                        }
                        ?>
        
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>