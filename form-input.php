<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fishing Form</title>
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

        .card-left, .card-right {
            width: 40%;
            padding: 10px;
            box-sizing: border-box;
        }

        .card-left label{
            text-shadow: 2px 2px 2px #222222;
        }

        .card-right .textpart{
            background-color: #222222;
            display: flex; /* Ensures it can grow/shrink to fit its container */
            justify-content: center; /* Centers text horizontally */
            align-items: center; /* Centers text vertically */
        }

        .card-right {
            display: flex;
            flex-direction: column;
        }
        
        img{
            max-width: 100%;
        }
        .scrollable-part {
            flex-grow: 1; 
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

        input[type='text'] {
            border-radius: 4px;
            border: 3px solid #555555;
            outline: none;
            -webkit-transition: 0.3s;
            transition: 0.3s;
        }

        input[type='text']:focus {
            border: 3px solid #222222
        }

    </style>
</head>
<body>
    <form action="proses-input.php" method="POST" enctype="multipart/form-data" class="card">
        <div class="card-left">
            <label for="fish-name"><p>Fish Name</p></label>
            <input type="text" name="fish-name" required>
            <label for="appearance"><p>Appearance</p></label>
            <input type="file" name="appearance" accept="gambarikan/" required>
            <label for="bait"><p>Bait</p></label>
            <input type="text" name="bait" required>
            <label for="time"><p>Time</p></label>
            <input type="text" name="time" required>
            <label for="weather"><p>Weather</p></label>
            <input type="text" name="weather" required>
            <label for="season"><p>Season</p></label>
            <input type="text" name="season" required>
            <input type="hidden" name="location" id="selected-location">
        </div>
        <div class="card-right">
            <label for="location" style="text-shadow: 2px 2px 2px #222222;">Location</label><br>
            <div class="scrollable-part">
                <div class="ancient-isle minicard" data-location="Ancient Isle">
                    <div class="imagepart">
                        <img src="src/ensien aisl.png">
                    </div>
                    <div class="textpart">
                        <p>Ancient Isle</p>
                    </div>
                </div>
                <div class="the-depths minicard" data-location="The Depths">
                    <div class="imagepart">
                        <img src="src/depths.png">
                    </div>
                    <div class="textpart">
                        <p>The Depths</p>
                    </div>
                </div>
                <div class="muswud minicard" data-location="Moosewood">
                    <div class="imagepart">
                        <img src="src/muswud.png">
                    </div>
                    <div class="textpart">
                        <p>Moosewood</p>
                    </div>
                </div>
                <div class="roslit minicard" data-location="Roslit Bay">
                    <div class="imagepart">
                        <img src="src/roslit.png">
                    </div>
                    <div class="textpart">
                        <p>Roslit Bay</p>
                    </div>
                </div>
                <div class="forsaken minicard" data-location="Forsaken Shores">
                    <div class="imagepart">
                        <img src="src/forsaken.png">
                    </div>
                    <div class="textpart">
                        <p>Forsaken Shores</p>
                    </div>
                </div>
                <div class="desolate minicard" data-location="Desolate Deep">
                    <div class="imagepart">
                        <img src="src/desolate.png">
                    </div>
                    <div class="textpart">
                        <p>Desolate Deep</p>
                    </div>
                </div>
                <div class="vertigo minicard" data-location="The Vertigo">
                    <div class="imagepart">
                        <img src="src/vertigo.png">
                    </div>
                    <div class="textpart">
                        <p>The Vertigo</p>
                    </div>
                </div>
                <div class="snowcap minicard" data-location="Snowcap Island">
                    <div class="imagepart">
                        <img src="src/snowcap.png">
                    </div>
                    <div class="textpart">
                        <p>Snowcap Island</p>
                    </div>
            </div>
        </div>
        <input type="submit" name="submit" value="Submit" onclick="submitForm()" class="submitbtn">
    </form>

    <script>
        const minicards = document.querySelectorAll('.minicard');
        const selectedLocationInput = document.getElementById('selected-location');

        minicards.forEach(card => {
            card.addEventListener('click', () => {
                minicards.forEach(c => c.classList.remove('selected'));

                card.classList.add('selected');

                selectedLocationInput.value = card.dataset.location;
            });
        });

        function submitForm() {
            if (!selectedLocationInput.value) {
                alert('Please select a location!');
                return;
            }

            document.querySelector('form').submit();
        }
    </script>
</body>
</html>
