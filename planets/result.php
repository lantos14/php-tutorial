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
      include 'database.php'; // import planet data

      $selectedPlanet = $_POST["Planet"];

      function getAtmosphere($atmo) {
        foreach ($atmo as $key) {
          return $key;
        }
      }
    ?>

    <div>
      <h2>Planet Information</h2>
      <p>Name: <strong> <?php echo $selectedPlanet?> </strong></p>
      <p>Equatorial Radius: 
        <strong> 
          <?php echo $planets[$selectedPlanet]["radius"]." km"?> 
        </strong>
      </p>
      <p>Gravity: 
        <strong> 
        <?php echo $planets[$selectedPlanet]["gravity"]." m/s2"?>
      </strong>
    </p>
      <p>Atmosphere composition: 
        <strong> 
          <?php echo getAtmosphere($planets[$selectedPlanet]["atmosphere"])?>
        </strong>
      </p>
      <img 
      src=<?php echo $planets[$selectedPlanet]["img-src"]?> 
      alt="planet">
    </div>
  
  </div>


</body>
</html>