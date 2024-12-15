<?php
include("config.php");

if(!isset($_GET['id'])){
    header('Location: edit-ikan.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM ikan WHERE id = $id";

$query = mysqli_query($connect, $sql);
$ikan = mysqli_fetch_assoc($query);
$data = mysqli_num_rows($query);

if($data < 1){
    die("Data Ikan tidak ditemukan");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Edit Ikan</title>
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
            align-items: center;
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
    <form action="proses-editikan.php" method="POST" enctype="multipart/form-data" class="card">
        <div class="card-left">
            <input type="hidden" name="id" value="<?php echo $ikan['id'] ?>">

            <label for="name"><p>Fish Name</p></label>
            <input type="text" name="name" placeholder="nama ikan" value="<?php echo $ikan['name'] ?>">

            <label for="appearance"><p>Appearance</p></label>
            <div>
                <!-- Display the current image -->
                <?php if (!empty($ikan['appearance'])): ?>
                    <img src="gambarikan/<?php echo $ikan['appearance']; ?>" alt="Current Appearance" style="max-width: 200px; display: block; margin-bottom: 10px;">
                <?php else: ?>
                    <p>No image uploaded</p>
                <?php endif; ?>

                <!-- Input for uploading a new image -->
                <input type="file" name="appearance" accept="gambarikan/">
            </div>

            <label for="bait"><p>Bait</p></label>
            <input type="text" name="bait" value="<?php echo $ikan['bait'] ?>">

            <label for="time"><p>Time</p></label>
            <input type="text" name="time" value="<?php echo $ikan['time'] ?>">

            <label for="weather"><p>Weather</p></label>
            <input type="text" name="weather" value="<?php echo $ikan['weather'] ?>">

            <label for="season"><p>Season</p></label>
            <input type="text" name="season" value="<?php echo $ikan['season'] ?>">
        </div>
        <div class="card-right">
            <div class="scrollable-part">
                <?php
                $locations = [
                    "Ancient Isle" => "src/ensien aisl.png",
                    "The Depths" => "src/depths.png",
                    "Moosewood" => "src/muswud.png",
                    "Roslit Bay" => "src/roslit.png",
                    "Forsaken Shores" => "src/forsaken.png",
                    "Desolate Deep" => "src/desolate.png",
                    "The Vertigo" => "src/vertigo.png",
                    "Snowcap Island" => "src/snowcap.png",
                ];

                foreach ($locations as $location => $image) {
                    $selectedClass = ($ikan['location'] === $location) ? 'selected' : '';
                    echo "
                    <div class='minicard $selectedClass' data-location='$location'>
                        <div class='imagepart'>
                            <img src='$image'>
                        </div>
                        <div class='textpart'>
                            <p>$location</p>
                        </div>
                    </div>
                    ";
                }
                ?>
            </div>
            <input type="hidden" name="location" id="selected-location">
            <input type="submit" value="Simpan" name="simpan" onclick="submitForm()">
        </div>
        </div>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
        const minicards = document.querySelectorAll('.minicard');
        const selectedLocationInput = document.getElementById('selected-location');

        minicards.forEach(card => {
            card.addEventListener('click', () => {
                minicards.forEach(c => c.classList.remove('selected'));

                card.classList.add('selected');
                selectedLocationInput.value = card.dataset.location;
            });
        });

        // Saat halaman dimuat, pilih lokasi lama
        const savedLocation = selectedLocationInput.value;
        if (savedLocation) {
            const selectedCard = [...minicards].find(card => card.dataset.location === savedLocation);
            if (selectedCard) {
                selectedCard.classList.add('selected');
            }
        }
    });
    </script>
</body>
</html>
