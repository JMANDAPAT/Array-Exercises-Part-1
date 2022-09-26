<center>
<?php

echo "<br> ========================= PHP Array Exercise 2 ============================= " . "<br><br>";


?>

    <!DOCTYPE html>
    <html lang="en">

<style type="text/css">


body {
    font-family: 'Lobster', cursive;
    background: -webkit-linear-gradient(wheat, pink);

}
    

.container{
    border: solid green 2px;
}



</style>

    <head>
        <meta charset="UTF-8">
        <title>Weather Forecast</title>
    </head>
    <body>

<div class="container">
    <h4>Instructions</h4>
    <p>For this exercise, you will use a list of ten of the largest cities in the world. (Please note, these are not the ten largest, just a selection of ten from the largest cities.) Create an array with the following values: Tokyo, Mexico City, New York City, Mumbai, Seoul, Shanghai, Lagos, Buenos Aires, Cairo, London.</p>
        
        <p>Print these values to the browser separated by commas, using a loop to iterate over the array. Sort the array, then print the values to the browser in an unordered list, again using a loop.</p>
        
        <p>Add the following cities to the array: Los Angeles, Calcutta, Osaka, Beijing. Sort the array again, and print it once more to the browser in an unordered list.</p>

</div>
        <h1>Ten Largest Cities In The World</h1>
    <?php
    
    $city = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
    foreach($city as $c) {
        echo "$c, ";
    }

    
    sort($city);
    
    echo "<ul>";
    foreach($city as $c){
        echo "$c.<br>";
    }
    echo "</ul>";
    
    array_push($city, "Los Angeles", "Calcutta", "Osaka", "Beijing");
    
    echo "<ul>";
    foreach($city as $c){
        echo "$c.<br>";
    }
    echo "</ul>";
    ?>
  
    </center>

        </body>
    </html>