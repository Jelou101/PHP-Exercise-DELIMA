<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 1 DELIMA</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="exercise1.css">
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
        echo "<p>We've seen all kinds of weather this month. At the beginning of the month, we had <span>{$weather_conditions[5]}</span> and <span>{$weather_conditions[6]}</span>.
        Then came <span>{$weather_conditions[1]}</span> with a few <span>{$weather_conditions[2]}</span> and some <span>{$weather_conditions[0]}</span>.
        At least we didn't get any <span>{$weather_conditions[3]}</span> or <span>{$weather_conditions[4]}</span>.</p>";
    ?>
</body>
</html>