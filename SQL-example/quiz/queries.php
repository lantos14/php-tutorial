<?php

$quizQuery = "SELECT country.Code, country.Name, city.Name AS Capital 
FROM country 
INNER JOIN city ON country.Capital = city.ID
ORDER BY RAND()
LIMIT 4;";

function getCountryAndCapital($country) {
  return "SELECT country.Name, city.Name AS Capital 
  FROM country 
  INNER JOIN city ON country.Capital = city.ID
  WHERE country.Name LIKE '".$country."';";
}

?>
