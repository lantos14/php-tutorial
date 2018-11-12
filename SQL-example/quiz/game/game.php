<?php

class quizGame {
  public $_correctAnswer;

  public function __construct() {
    $this->_correctAnswer = "";
  }

  public function setCorrect($answer) {
    $this->_correctAnswer = $answer;
  }

  public function getResult($guess) {
    return ($this->_correctAnswer === $_guess);
  }
}


?>