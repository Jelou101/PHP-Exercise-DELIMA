<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 1 DELIMA</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
     <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e0f7fa, #e1bee7);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .weather-icons img {
            width: 60px;
            height: 60px;
            object-fit: contain;
        }
        .weather-icons {
            display: flex;
            margin-bottom: 400px;
            gap: 10px;
            position: absolute;
        }
        .container {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
            padding: 30px;
            max-width: 600px;
            text-align: center;
            position: relative;
            animation: fadeIn 1s ease;
        }
        h1 {
            color: #4a148c;
            font-weight: 600;
        }
        h2 {
            color: #7b1fa2;
            margin-bottom: 20px;
        }
        p {
            color: #555;
            line-height: 1.6;
        }
        p span {
            color: #007bff;
            font-weight: bold;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <!-- Weather Icons -->
    <div class="weather-icons">
        <img src="https://cdn.creazilla.com/cliparts/7815436/snow-crystal-clipart-md.png" alt="Snow">
        <img src="https://cdn.creazilla.com/cliparts/70515/wind-clipart-md.png" alt="Wind">
        <img src="https://cdn.creazilla.com/cliparts/67987/sun-face-clipart-md.png" alt="Sunshine">
        <img src="https://cdn.creazilla.com/cliparts/4101/cloud-in-the-sky-clipart-lg.png" alt="Clouds">
        <img src="https://cdn.creazilla.com/cliparts/1502598/cloud-with-rain-clipart-md.png" alt="Rain">
        <img src="https://cdn.creazilla.com/cliparts/3475291/meteoset-precipitation-hail-3-nbg-clipart-md.png" alt="Hail">
        <img src="https://cdn.creazilla.com/cliparts/1990213/snow-clipart-md.png" alt="Sleet">
    </div>

    <div class="container">
    <h1>PHP Exercise 1</h1>
    <h2>Claudin Jelou B. Delima <br> Weather Conditions</h2>

    <?php
        // Array of weather conditions
        $weather_conditions = array ("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");

        // Echo the statement using the array values
        echo "<p>We've seen all kinds of weather this month. At the beginning of the month, we had <span>{$weather_conditions[5]}</span> and <span>{$weather_conditions[6]}</span>. ";
        echo "Then came <span>{$weather_conditions[1]}</span> with a few <span>{$weather_conditions[2]}</span> and some <span>{$weather_conditions[0]}</span>. ";
        echo "At least we didn't get any <span>{$weather_conditions[3]}</span> or <span>{$weather_conditions[4]}</span>.</p>";
    ?>
</body>
</html>