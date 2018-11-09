<?php

class Database {
  public $_link, $_numRows, $_result;
  
  public function __construct($server, $username, $pwd, $db) {
    $this->_link = mysqli_connect($server, $username, $pwd, $db);
  }

  public function disconnect() {
    mysqli_close($this->_link);
  }

  public function query($sql) {
    $this->_result = mysqli_query($this->_link, $sql);
    $this->_numRows = mysqli_num_rows($this->_result);
  }

  public function numRows() {
    return $this->_numRows;
  }

  public function rows() {
    $rows = array();
    for ($i = 0; $i < $this->_numRows; $i++) {
      $rows[] = mysqli_fetch_assoc($this->_result);
    }
    return $rows;
  }
}
?>
