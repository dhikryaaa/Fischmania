<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User Fischmania</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Martian+Mono:wght@100..800&display=swap" rel="stylesheet">
    <style>
        body, html {
            width: 100%;
            height: 100vh;
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

        .card {
            flex: 1; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 60%;
            gap: 10px;
            max-width: 800px; 
            height: auto;
            background-color: #3F4149;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        .btn-yellow {
            display: inline-block;
            background-color: #FFE44A;
            color: #3F4149;
            border: none;
            border-radius: 8px;
            padding: 5px 10px;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .btn-yellow:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .btn-red {
            display: inline-block;
            background-color: #FF4A4A;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 5px 10px;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            text-align: center;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .btn-red:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        table {
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

        tr:nth-child(even) { background-color: #313131FF; }

        td {
            border: 1px solid #1A1A1AFF;
            padding: 8px;
            color: white;
        }
    </style>
    <script type="text/javascript">
        function confirmDelete() {
            return confirm("Apakah Anda yakin ingin menghapus data ini?");
        }
    </script>
</head>
<body>
    <div class="card">
        <header>
            <h3>User List</h3>
        </header>

        <table>
            <thead>
            <tr>
                <th>Email</th>
                <th>Usertype</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM users";

                $query = mysqli_query($connect, $sql);

                while ($user = mysqli_fetch_array($query)) {
                    $usertype = ($user['usertype'] == 1) ? "Admin" : "User";

                    echo "<tr>";

                    echo "<td>" . $user['email'] . "</td>";
                    echo "<td>" . $usertype . "</td>";

                    echo "<td>";
                    echo "<a href='form-edituser.php?id=" . $user['id'] . "' class='btn-yellow'>Edit</a> ";
                    echo "<a href='hapus-user.php?id=" . $user['id'] . "' class='btn-red' onclick='return confirmDelete()'>Delete</a>";
                    echo "</td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <p style="text-align: center;">Total: <?php echo mysqli_num_rows($query) ?></p>
        <br>
        <a href="pdf-user.php" class="btn-yellow">Print PDF</a>
    </div>
</body>
</html>