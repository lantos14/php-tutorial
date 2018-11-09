<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SQL DB</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <?php
  require_once "database.php";
  
  $db = new Database('localhost', 'root', '', 'world');
  
  $db->query("SELECT * FROM country");

  print_r($db->_result);
  echo '<br>';
  print_r($db->_numRows);
  ?>
</body>
</html>