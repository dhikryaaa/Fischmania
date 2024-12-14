<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fischmania | Roslit Bay</title>
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
        color: #82AD0AFF;
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
        color: #82AD0AFF;
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
                <h1>Roslit Bay</h1>
            </div>
            <div class="content">
                <div class="image">
                    <img src="src\roslit.png" alt="Roslit Bay">
                </div>
                <div class="text">
                    <h2>Overview</h2>
                    <p>
                        <span>Roslit Bay</span> is one of the five major islands located west of the map. This island is bursting with <span>Arapaimas</span> with an occasional <span>Abundance Event</span> in the pond. The island is navigated directly west of <span>Moosewood</span>.
                        <br><br>Roslit Bay can be separated into two major locations: Roslit (which includes Roslit Hamlet, Roslit Bay and Roslit Pond) and Roslit Volcano, which both have their own Bestiary entry.
                        <br><br>Roslit has 17 fishes in total, 3 Commons, 4 Uncommons, 4 Unusuals, 3 Rares, 2 Legendaries and 1 Mythical and 1 Exotic. Completing the Roslit Bestiary grants the player the <span>Fake Pufferfish Bobber</span>.
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
                        $sql = "SELECT * FROM `ikan` WHERE location = 'Roslit Bay'";
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