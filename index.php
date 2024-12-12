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

        .grid{
            display:grid;
            grid-row: 4;
            grid-column: 2;
            grid-template-rows: auto;
            grid-template-columns: auto;
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

                </div>
                <div class="text-description">

                </div>
            </div>
            <div class="roslit card">
                
            </div>
            <div class="forsaken card">

            </div>
            <div class="ancient card">

            </div>
            <div class="depths">

            </div>
            <div class="desolate">

            </div>
            <div class="vertigo">

            </div>
            <div class="snowcap">

            </div>
        </div>
    </main>
</body>
</html>