<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aziel P</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: linear-gradient(to bottom, #4B0082, #000000);
            /* Gradient goes from dark violet (#4B0082) to black (#000000) */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
            height: 100vh; /* Set a fixed height to fill the viewport */
            overflow: hidden; /* Hide overflow content */
        }
        .welcome-text {
            font-size: 90px;
            margin-top: 100px;
            margin-bottom: 600px;
            color: white; /* Set text color to white */
        }
        .next-button {
            padding: 10px 250px;
            font-size: 18px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .next-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="welcome-text">Welcome to Aziel P</div>
    <form action="login.php" method="GET">
        <button type="submit" class="next-button">Visit</button>
    </form>
</body>
</html>
