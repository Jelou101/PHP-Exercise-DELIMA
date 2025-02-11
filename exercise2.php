<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercise 2 DELIMA</title>
</head>
<body>
    <h1>PHP Exercise 1</h1>
    <h2>Claudin Jelou B. Delima</h2>

    <?php
    //Create an array with the initial list of cities
    $cities = array("Tokyo","Mexico City","New York City","Mumbai","Seoul","Shanghai","Lagos","Buenos Aires","Cairo","London");

    //Print the cities separated by commas using a loop
    echo "<p><b>Cities separated by commas:</b> ";
    foreach ($cities as $city) {
        echo $city . ", ";
    }

    //Sort the array and print it in an unordered list
    sort($cities);
    echo "<p><b>Cities (sorted):</b></p>";
    echo "<ul>";
    foreach ($cities as $city) {
        echo "<li>$city</li>";
    }
    echo "</ul><br>"; //line brk for clarity

    //Add more cities to the array
    array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");

    //Sort the array again and print it in an unordered list
    sort($cities);
    echo "<p><strong>Cities after adding new ones and sorting again:</strong></p>";
    echo "<ul>";
    foreach ($cities as $city) {
        echo "<li>$city</li>";
    }
    echo "</ul>";
    ?>

</body>
</html>
