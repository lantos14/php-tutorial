<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Result</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="result.css" />
</head>
<body>
  <?php
  require_once "../db/database.php";
  require_once "../db/queries.php";

  $quess = $_GET["quess"];
  $country = $_GET["country"];

  $db = new Database('localhost', 'root', '', 'world');
  $db->query(getCountryAndCapital($country));
  $endResult = $db->_result;
  $values = $endResult->fetch_all(MYSQLI_ASSOC);
  $db->disconnect();
  ?>

  <div class="result-body">

  <?php
  if ($values[0]['Capital'] === $quess) {
    echo '<p id="result"> Right Answer </p>';
  } else {
    echo '<p id="result"> Wrong Answer </p>';
  }
  ?>

  <button onClick="location.href = 'quiz.php';">Next Question</button>

  </div>    


</body>
</html>
