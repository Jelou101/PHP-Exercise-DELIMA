<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 1 DELIMA</title>
</head>
<body>
    <h1>PHP Exercise 1</h1>
    <h2>Claudin Jelou B. Delima</h2>
    <?php
        // Array of weather conditions
        $weather_conditions = array ("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");

        // Echo the statement using the array values
        echo "<p>We've seen all kinds of weather this month. At the beginning of the month, we had ". $weather_conditions[5] ." and ". $weather_conditions[6] .". ";
        echo "Then came ". $weather_conditions[1] ." with a few ". $weather_conditions[2] ." and some ". $weather_conditions[0] .". ";
        echo "At least we didn't get any ". $weather_conditions[3] ." or ". $weather_conditions[4] .".</p>";
    ?>
</body>
</html>
