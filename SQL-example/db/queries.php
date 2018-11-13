<?php

$quizQuery = "SELECT country.Name, city.Name AS Capital 
FROM country 
INNER JOIN city ON country.Capital = city.ID
WHERE country.Continent LIKE 'Europe' 
OR country.Continent LIKE'Asia'
OR country.Continent LIKE'North America'
ORDER BY RAND()
LIMIT 4;";

function getCountryAndCapital($country) {
  return "SELECT country.Name, city.Name AS Capital 
  FROM country 
  INNER JOIN city ON country.Capital = city.ID
  WHERE country.Name LIKE '".$country."';";
}

?>
