<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Fischmania</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Martian+Mono:wght@100..800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="src/fischmania-logo 1.png">
    <style>
        body, html {
            height: 100vh;
            width: 100vw;   
            overflow-x: hidden;
            background: url(./src/bintang=ikan.png);
            font-family: "Martian Mono", monospace;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            font-variation-settings: "wdth" 100;
        }

        nav {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            font-size: large;
            align-items: center;
            padding: 1em;
        }

        nav a {
            text-decoration: none;
            color: #FFFFFF;
            font-size: 2em;
        }

        .authBtn {
            color: #3F4149;
            background-color: #FFE44A;
            border: none;
            border-radius: 12px;
            padding: 1em 3em;
            cursor: pointer;
        }

        .authBtn a {
            color: #3F4149;
            font-size: 2em;
        }

        h2 {
            font-size: 12px;
            color: #9A9A9A;
        }

        .grid {
            display: grid;
            padding: 2.5%;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(4, auto);
            gap: 1em;
        }

        .card {
            background-color: #3F4149;
            border-radius: 10px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #FFFFFF;
            transition: transform 0.3s ease, box-shadow 0.3s ease;

        }
        
        .card:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .link-card {
            text-decoration: none;
            color: inherit;
            display: flex;
        
        }

        .top-image {
            width: 100%;
            flex-shrink: 0;
        }

        .top-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .text-description {
            padding: 1em;
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

            <a href="moosewood.php" class="link-card">
                <div class="muswud card">
                    <div class="top-image">
                        <img src="./src/muswud.png" alt="Moosewood">
                    </div>
                    <div class="text-description">
                        <h1>Moosewood</h1>
                        <h2>
                        Moosewood Village, occasionally referred to as Moosewood, is the first island located in the Middle of the map and one of the five major islands in the game where newly joined players first spawn in.
                        </h2>
                    </div>
                </div>
            </a>

            <a href="roslit.php" class="link-card">
                <div class="roslit card">
                    <div class="top-image">
                        <img src="./src/roslit.png" alt="">
                    </div>
                    <div class="text-description">
                        <h1>
                            Roslit
                        </h1>
                        <h2>
                        Roslit Bay is one of the five major islands located west of the map. This island is bursting with Arapaimas with an occasional Abundance Event in the pond. The island is navigated directly west of Moosewood.
                        </h2>
                    </div>
                </div>
            </a>

            <a href="forsaken.php" class="link-card">
                <div class="forsaken card">
                    <div class="top-image">
                        <img src="./src/forsaken.png" alt="">
                    </div>
                    <div class="text-description">
                        <h1>
                            Forsaken Shores
                        </h1>
                        <h2>
                        Forsaken Shores is an island added on the 1.05.0 update. It is a part of the Forsaken Shores Expansion Update, the island is located southwest of Roslit Bay.
                        </h2>
                    </div>
                </div>
            </a>

            <a href="ancientIsle.php" class="link-card">
                <div class="ancient card">
                    <div class="top-image">
                        <img src="./src/ensien aisl.png" alt="">
                    </div>
                    <div class="text-description">
                        <h1>Ancient Isle</h1>
                        <h2>
                        A dangerous island which in it resides the Megalodons, Mosasaurus, and many more. Players entering this island will receive a warning "The sea is dangerous. Sail with caution.", and those who continue will be met with stone spikes, dynamite, and whirlpool coming out to destroy their boats and the players
                        </h2>
                    </div>
                </div>
            </a>

            <a href="depths.php" class="link-card">
                <div class="depths card">
                    <div class="top-image">
                        <img src="./src/depths.png" alt="">
                    </div>
                    <div class="text-description">
                        <h1>The Depths</h1>
                        <h2>
                        The Depths is an area hidden in Vertigo with glowing red crystals. Its only entrance is a door near red gems, which will only open if the player has 100% Bestiary in Vertigo and has obtained The Depths Key.
                        </h2>
    
                    </div>
                </div>  
            </a>

            <a href="desolateDeep.php" class="link-card">
                <div class="desolate card">
                    <div class="top-image">
                        <img src="./src/desolate.png" alt="">
                    </div>
                    <div class="text-description">
                        <h1>Desolate Deep</h1>
                        <h2>The Desolate Deep is located behind Sunstone Island. Go back until you find a Buoy at (-791 142 -3102.8) where you can find a trench and dive down. You'll need either the Basic Diving Gear or the Advanced Diving Gear to avoid drowning. Swim down to the hole and keep going until you find the cave.</h2>
                    </div>
                </div>
            </a>

            <a href="vertigo.php" class="link-card">
                <div class="vertigo card">
                    <div class="top-image">
                        <img src="./src/vertigo.png" alt="">
                    </div>
                    <div class="text-description">
                        <h1>Vertigo</h1>
                        <h2>Vertigo, also known as The Great Abyss. Is a cave hidden under the world with glowing crystals. It's only entrance is a Strange Whirlpool and its only exit is by leaving the game or a Conception Conch.</h2>
                    </div>
                </div>
            </a>

            <a href="snowcap.php" class="link-card">
                <div class="snowcap card">
                    <div class="top-image">
                        <img src="./src/snowcap.png" alt="">
                    </div>
                    <div class="text-description">
                        <h1>Snowcap Island</h1>
                        <h2>
                        Snowcap Island is a freezing island located Southeast of Moosewood. It features large glaciers and frozen peaks. The island is enormous yet few NPCs live there due to its harsh climate.
                        </h2>
    
                    </div>
                </div>
            </a>
        </div>
    </main>

    <script>
        
    </script>
</body>
</html>