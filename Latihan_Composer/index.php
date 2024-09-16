<?php
require 'vendor/autoload.php';

use App\App;

// Membuat instance dari App
$app = new App();

// Mendapatkan waktu saat ini
$currentTime = $app->getCurrentTime();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waktu Saat Ini</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            color: #555;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Waktu Saat Ini</h1>
        <p id="current-time"><?php echo $currentTime; ?></p>
    </div>

    <script>
        function updateTime() {
            const now = new Date();
            const year = now.getFullYear();
            const month = String(now.getMonth() + 1).padStart(2, '0');
            const day = String(now.getDate()).padStart(2, '0');
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');

            const formattedDate = `${year}-${month}-${day}`;
            const formattedTime = `${hours}:${minutes}:${seconds}`;

            document.getElementById('current-time').textContent = `${formattedDate} ${formattedTime}`;
        }

        // Update time immediately
        updateTime();
        // Update time every second
        setInterval(updateTime, 1000);
    </script>
</body>
</html>
