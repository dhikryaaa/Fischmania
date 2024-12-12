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
        .html, body{
            background:url(./src/bintang=ikan.png);
            display:flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
            font-family: "Martian Mono", monospace;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            font-variation-settings: "wdth" 100;
        }
        p{
            color: #FFFFFF;
        }
        .card{
            background-color: #3F4149;
            width:fit-content;
            padding: 2em;
            padding-top: 0;
            display:flex;
            justify-content: center;
            flex-direction: column;
            border-radius: 4%;
        }
        .header{
            display:flex;
            flex-direction: row;
            gap: 5em;
        }
        .header { 
            display: flex; 
            flex-direction: row; 
            gap: 5em; 
            cursor: pointer; 
        } 
        .header p { 
            margin: 0; 
            padding: 1em; 
        } 
        .header p.active { 
            color: #FFFFFF; 
            border-radius: 4%; 
        }
        .header p:hover{
            color: #FFFFFF;
        }
        #login { 
            color: #3F4149; 
            background-color: #FFE44A; 
            width: 100%; 
            border: none; 
            border-radius: 12px; 
            padding: 10px 20px; 
            font-size: 1em;
            cursor: pointer; 
        } 
        #register{
            color: #3F4149; 
            background-color: #FFE44A; 
            width: 100%; 
            border: none; 
            border-radius: 12px; 
            padding: 10px 20px; 
            font-size: 1em;
            cursor: pointer; 
        }
        .form-content{
            display: none;
        }
        .form-content.active{
            display: block;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="header">
            <p id="login-tab" class="active">Login</p>
            <p id="register-tab">Register</p>
        </div>
        <div class="form">
            <div id="login-form" class="form-content active">
                <form method="POST" action="proses-login.php">
                    <label for="email"><p>Email</p></label>
                    <input type="text" name="email" id="email" required>
                    <label for="password"><p>Password</p></label>
                    <input type="password" name="password" id="password" required>
                    <label for="submit"><br/><br></label>
                    <input type="submit" name="login" value="Login" id="login">
                </form>
            </div>
            <div id="register-form" class="form-content"> 
                <form action="POST"> 
                    <label for="email"><p>Email</p></label> 
                    <input type="text" name="email" id="register-email" required> 
                    <label for="password"><p>Password</p></label> 
                    <input type="password" name="password" id="register-password" required> 
                    <label for="confirm-password"><p>Confirm Password</p></label> 
                    <input type="password" name="confirm-password" id="confirm-password" required> 
                    <label for="submit"><br/><br></label> 
                    <input type="submit" name="register" value="Register" id="register"> 
                </form> 
            </div>
        </div>
    </div>

    <script>
        document.getElementById('login-tab').addEventListener('click', function() { 
            document.getElementById('login-tab').classList.add('active'); 
            document.getElementById('register-tab').classList.remove('active'); 
            document.getElementById('login-form').classList.add('active'); 
            document.getElementById('register-form').classList.remove('active'); 
        }); 
        document.getElementById('register-tab').addEventListener('click', function() { 
            document.getElementById('register-tab').classList.add('active'); 
            document.getElementById('login-tab').classList.remove('active'); 
            document.getElementById('register-form').classList.add('active'); 
            document.getElementById('login-form').classList.remove('active'); 
        });    
    </script>
</body>
</html>