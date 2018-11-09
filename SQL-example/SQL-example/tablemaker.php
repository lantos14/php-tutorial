<?php
// 1st. argument: the number of rows
// 2nd. argument: the name of columns
function renderTable($rows, $data) {

  $columns = array();
  $dataArray = array();
  
  if(!empty($data)){
      $columns = array_keys($data[0]);
  }

  echo '<table> 
  <thead>';
  
  foreach ($columns as $name) {
    echo '<th>'.$name.'</th>';
  }
  echo '<thead>
  <tbody>';

  for ($i = 0; $i < 10; $i++) {
    foreach ($columns as $name) {
      echo '<tr>'.$data[$i][$name].'</tr>';
    }

  }

  echo '</tbody>
  </table>';
}
?>
