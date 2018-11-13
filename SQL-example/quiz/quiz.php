<!DOCTYPE html>
<html>
<head>
  <meta charset="Windows-1252">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SQL DB</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="./quiz.css" />
</head>
<body>

  <?php
  require_once "../db/database.php";
  require_once "../db/queries.php";

  session_start();

  if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
  } else {
    if ($_GET["correct"]) {
      $_SESSION['score']++;
    }
  }

  if (isset($_GET["quess"])) {
    $quess = $_GET["quess"];
    echo $_COOKIE["quess"];
  }

  $db = new Database('localhost', 'root', '', 'world');
  $db->query($quizQuery);
  $endResult = $db->_result;
  $values = $endResult->fetch_all(MYSQLI_ASSOC);

  $db->disconnect();
  ?>

  <div id="quiz-body">
    <div class="counter">
      <p>User: test</p>
      <p>Score: <?php echo $_SESSION['score'];?></p>
    </div>

    <h4 id="question-text">What is the capital of <?php echo $values[0]['Name']?>?</h4>
    
    <div id="answers">
      
      <?php
        $answerOrder = range(0,3);
        shuffle($answerOrder);
        foreach ($answerOrder as $num) {
          $countryToSubmit = $values[0]['Name'];
          $quessToSubmit = $values[$num]['Capital'];

          echo "<p "; 
          echo "onClick =\"location.href='result.php?country=".$countryToSubmit
          ."&quess=".$quessToSubmit."'\"";
          echo 'class="answer">'.$quessToSubmit;
          echo '</p>';
        }
      ?>

    </div>

  </div>
</body>
</html>