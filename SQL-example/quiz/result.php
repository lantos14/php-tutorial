<?php
require_once "../database.php";
require_once "queries.php";

$quess = $_GET["quess"];
$country = $_GET["country"];

$db = new Database('localhost', 'root', '', 'world');
$db->query(getCountryAndCapital($country));
$endResult = $db->_result;
$values = $endResult->fetch_all(MYSQLI_ASSOC);
$db->disconnect();

if ($values[0]['Capital'] === $quess) {
  echo 'true';
} else {
  echo 'false';
}
?>

<a href="quiz.php">Next Question</a>