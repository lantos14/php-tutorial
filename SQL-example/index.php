<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SQL DB</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
  <?php
  require_once "database.php";
  require_once "tablemaker.php";
  
  $db = new Database('localhost', 'root', '', 'world');
  $db->query(
    "SELECT country.Code, country.Name, city.Name AS Capital 
    FROM country 
    INNER JOIN city ON country.Capital = city.ID
    ORDER BY RAND()
    LIMIT 10;");
  $endResult = $db->_result;
  
  $values = $endResult->fetch_all(MYSQLI_ASSOC);

  renderTable($db->rows(), $values);
  $db->disconnect();
  ?>
</body>
</html>