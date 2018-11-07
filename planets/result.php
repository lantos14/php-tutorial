<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Planet Result</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="planets.css" />
</head>
<body>

  <div id="main">

    <?php

      $selectedPlanet = $_POST["Planet"];
      $planets = array(
        "Mercury" => array(
          "name" => "Mercury",
          "img-src" => "https://bit.ly/2DqC8Sf",
          "radius" => 2400,
          "gravity" => 3.7,
          "atmosphere" => null
        ),
        "Venus" => array(
          "name" => "Venus",
          "img-src" => "https://bit.ly/2QqES5d",
          "radius" => 6000,
          "gravity" => 8.87,
          "atmosphere" => array("CO2", "N")
        ),
        "Earth" => array(
          "name" => "Earth",
          "img-src" => "https://bit.ly/2rbB3Gd",
          "radius" => 6400,
          "gravity" => 9.8,
          "atmosphere" => array("O", "N")
        ),
        "Mars" => array(
          "name" => "Mars",
          "img-src" => "https://bit.ly/2SUy5lD",
          "radius" => 3400,
          "gravity" => 3.7,
          "atmosphere" => array("H", "He")
        ),
      );

    ?>

    <div>
      <h2>Planet Information</h2>
      <p>Name: <strong> <?php echo $selectedPlanet?> </strong></p>
      <p>Equatorial Radius: <strong> <?php echo $planets[$selectedPlanet]["radius"]." km"?> </strong></p>
      <p>Gravity: <strong> <?php echo $planets[$selectedPlanet]["gravity"]." m/s2"?></strong></p>
      <img src=<?php echo $planets[$selectedPlanet]["img-src"]?> alt="planet">
    </div>
  
  </div>


</body>
</html>