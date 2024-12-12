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
        body, html{
            height: 100vh;
            width: 100%;
            background: url(./src/bintang=ikan.png);
            font-family: "Martian Mono", monospace;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            font-variation-settings:
                "wdth" 100;
        }
        nav{
            display:flex;
            flex-direction: row;
            justify-content: space-between;
            font-size: large;
            align-items: center;
            padding: 1em;
        }
        nav a{
            text-decoration: none;
            color: #FFFFFF;
            font-size: 2em;
        }
        .authBtn{
            color: #3F4149; 
            background-color: #FFE44A; 
            border: none; 
            border-radius: 12px; 
            padding: 1em 3em;
            cursor: pointer; 
        }

        .authBtn a{
            color: #3F4149;
            font-size: 2em;
        }

    .grid { 
        display: grid; 
        grid-template-columns: repeat(2, 1fr); 
        grid-template-rows: repeat(2, auto);
        gap: 1em; 
    } 
        
    .card { 
        background-color: #3F4149; 
        border-radius: 10px; 
        overflow: hidden; 
        display: flex; 
        flex-direction: column; 
        justify-content: center; 
        align-items: center; 
        padding: 1em; 
        color: #FFFFFF; 
    }
    </style>
</head>
<body>
    <nav>
        <img src="./src/fischmania-logo 1.png">
        <a href="#">Home</a>
        <a href="#">Explore</a>
        <button class="authBtn"><a href="./form-pendaftaran.php">Sign In</a></button>
    </nav>
    <main>
        <div class="grid">
            <div class="muswud card">
                <div class="top-image">
                    <img src="./src/muswud.png" alt="">
                </div>
                <div class="text-description">
                    <h1>Moosewood</h1>
                    <h2>
                    Moosewood Village, occasionally referred to as Moosewood, is the first island located in the Middle of the map and one of the five major islands in the game where newly joined players first spawn in.
                    </h2>
                </div>
            </div>
            <div class="roslit card">
                <div class="top-image">
                    <img src="./src/roslit.png" alt="">
                </div>
                <div class="text-description">

                </div>
            </div>
            <div class="forsaken card">
                <div class="top-image">
                    <img src="./src/forsaken.png" alt="">
                </div>
                <div class="text-description">

                </div>
            </div>
            <div class="ancient card">
                <div class="top-image">
                    <img src="./src/ensien aisl.png" alt="">
                </div>
                <div class="text-description">

                </div>
            </div>
            <div class="depths">
                <div class="top-image">
                    <img src="./src/depths.png" alt="">
                </div>
                <div class="text-description">

                </div>
            </div>  
            <div class="desolate">
                <div class="top-image">
                    <img src="./src/desolate.png" alt="">
                </div>
                <div class="text-description">

                </div>
            </div>
            <div class="vertigo">
                <div class="top-image">
                    <img src="./src/vertigo.png" alt="">
                </div>
                <div class="text-description">

                </div>
            </div>
            <div class="snowcap">
                <div class="top-image">
                    <img src="./src/snowcap.png" alt="">
                </div>
                <div class="text-description">

                </div>
            </div>
        </div>
    </main>
</body>
</html>