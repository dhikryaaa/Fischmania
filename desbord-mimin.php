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
        body,html{
            width: 100%;
            height: 100vh;
            font-family: Arial, sans-serif;
            font-family: "Martian Mono", monospace;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            font-variation-settings: "wdth" 100;
            color: white;
            background: url(src/bintang=bintang.png);
            display: flex;
            justify-content: center;
        }
        a{
            text-decoration: none;
            color: white;
        }
        .card-container{
            width: 80%;
            display: flex;
            gap: 4em;
            justify-content: center;
            align-items: center; 
            height: 100%;
        }

        .card {
            flex: 1; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
            max-width: 800px; 
            height: auto;
            aspect-ratio: 3 / 3; 
            background-color: #3F4149;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        .card:hover{
            transform: translateY(-5px); 
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); 
        }

        .card img {
            width: 80%; 
            height: auto; 
            object-fit: contain; 
        }

        .icon{
            display: flex;
            justify-content: center;
        }
        .card .text h1 {
            margin: 0;
            font-size: 1.5rem;
            text-align: center;
        }

    </style>
</head>
<body>
    <div class="card-container">
        <a href="edit-ikan.php" class="card">
            <div class="icon">
                <img src="src/ikan aja(1).png" alt="">
            </div>
            <div class="text">
                <h1>Ikan</h1>
            </div>
        </a>
        <a href="edit-user.php" class="card">
            <div class="icon">
                <img src="src/path1.png" alt="">
            </div>
            <div class="text">
                <h1>User</h1>
            </div>
        </a>
    </div>
</body>
</html>