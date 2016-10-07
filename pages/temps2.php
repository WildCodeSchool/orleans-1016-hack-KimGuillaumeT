<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>WeatherMood</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
    <body>





<?php
    $homepage = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q='.$city.',&appid=7b1d35d2a9a6d3307db51fade9d390b4');
    var_dump ($homepage);
?>



    </body>

</html>