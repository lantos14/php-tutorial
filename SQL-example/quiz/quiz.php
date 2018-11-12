<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SQL DB</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="quiz.css" />
</head>
<body>
  <?php
  require_once "../database.php";
  require_once "queries.php";
  require_once "./game/game.php";

  if (isset($_GET["quess"])) {
    $quess = $_GET["quess"];
    echo $_COOKIE["quess"];
  }

  $db = new Database('localhost', 'root', '', 'world');
  $db->query($quizQuery);
  $endResult = $db->_result;
  $values = $endResult->fetch_all(MYSQLI_ASSOC);
  $db->disconnect();

  $game = new quizGame;
  $game->setCorrect($values[0]['Capital']);
  ?>

  <div id="quiz-body">

    <h4 id="question-text">What is the capital of <?php echo $values[0]['Name']?>?</h4>
    
    <div id="answers">
      <?php
        $answerOrder = range(0,3);
        shuffle($answerOrder);
        foreach ($answerOrder as $num) {
          $countryToSubmit = $values[0]['Name'];
          $quessToSubmit = $values[$num]['Capital'];

          echo "<a "; 
          echo "href='result.php?country=".$countryToSubmit
          ."&quess=".$quessToSubmit."'";
          echo 'class="answer">'.$quessToSubmit;
          echo '</a>';
        }
      ?>

    </div>

  </div>
</body>
</html>