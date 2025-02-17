<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 2 DELIMA</title>
    <link rel="stylesheet" href="exercise2.css">
</head>
<body>
    <div class="container">
        <h1>PHP Exercise 2</h1>
        <h2>Claudin Jelou B. Delima</h2>

        <?php
        // array; list of cities
        $cities = array("Tokyo","Mexico City","New York City","Mumbai","Seoul","Shanghai","Lagos","Buenos Aires","Cairo","London");

        // Function to print cities in an unordered list
        function printCityList($cities) {
            echo "<ul>";
            foreach ($cities as $city) {
                echo "<li>$city</li>";
            }
            echo "</ul>";
        }

        // Print cities separated by commas using a loop
        echo "<p><b>Cities separated by commas:</b> ";
        $lastIndex = count($cities) - 1;
        foreach ($cities as $index => $city) {
            echo $index < $lastIndex ? "$city, " : "$city";
        }
        echo "</p>";

        // Sort and print in an unordered list
        sort($cities);
        echo "<p><b>Cities (sorted):</b></p>";
        printCityList($cities);

        // Add new cities
        array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");

        // Sort again and print the final sorted list
        sort($cities);
        echo "<p><b>Cities after adding new ones and sorting again:</b></p>";
        printCityList($cities);
        ?>
    </div>
</body>
</html>
