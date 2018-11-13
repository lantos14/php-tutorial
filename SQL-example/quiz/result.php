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

  session_start();

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
  $correct = $values[0]['Capital'] === $quess;
  if ($correct) {
    echo '<p id="result" style="color:green"> Right Answer </p>';
  } else {
    echo '<p id="result" style="color:red"> Wrong Answer </p>';
  }
  
  $href = "location.href='quiz.php?correct=".$correct."';";

  echo "<button onClick=".$href.">Next Question</button>"
  ?>

  </div>    


</body>
</html>
