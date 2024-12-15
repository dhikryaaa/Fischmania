<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Edit Siswa</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('src/bintang=ikan.png') no-repeat center center/cover;
            font-family: Arial, sans-serif;
            font-family: "Martian Mono", monospace;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            font-variation-settings: "wdth" 100;
            color: white;
        }

        .card { 
            display: flex; 
            gap: 5px;
            width: 80%;
            max-width: 800px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            background-color: #3F4149;
            padding: 20px;
            position: relative;
            justify-content: space-evenly;
        }

        .card-left {
            width: auto;
            padding: 10px;
            box-sizing: border-box;
        }

        .card-left label{
            text-shadow: 2px 2px 2px #222222;
        }
        
        img{
            max-width: 100%;
        }
        .scrollable-part {
            flex-grow: 1; 
            width: 100%;
            max-height: 380px;
            overflow-y: auto;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        input[type="submit"] {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #FFE44A;
            color: #3F4149;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            align-self: flex-end; 
            width: 100%;
        }

        .imagepart{
            height: fit-content;
        }
        
        .minicard {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            cursor: pointer; 
            transition: transform 0.2s, box-shadow 0.2s; 
        }

        .minicard:hover {
            transform: translateY(-5px); 
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); 
        }

        .minicard.selected {
            border: 2px solid #FFE44A; 
            background-color: #555555; 
            box-shadow: 0 4px 10px rgba(255, 228, 74, 0.5); 
        }

        input[type='text'], input[type='password'] {
            width: 100%;
            border-radius: 4px;
            border: 3px solid #555555;
            outline: none;
            -webkit-transition: 0.3s;
            transition: 0.3s;
            box-sizing: border-box;
        }

        input[type='text']:focus, input[type='password']:focus {
            border: 3px solid #222222
        }

        label {
            text-shadow: 2px 2px 2px #222222;
        }
    </style>
</head>
<body>
    <form action="proses-edit.php" method="POST" enctype="multipart/form-data" class="card">
        <div class="card-left">
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>">
            
            <label for="name"><p>Email</p></label>
            <input type="text" name="name" value="<?php echo $siswa['email'] ?>">

            <label for="password"><p>Password</p></label>
            <input type="password" name="password" value="<?php echo $siswa['password'] ?>">

            <label for="usertype"><p>Usertype</p></label>
            <input type="text" name="usertype" value="<?php echo $siswa['usertype'] ?>">
            
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>
