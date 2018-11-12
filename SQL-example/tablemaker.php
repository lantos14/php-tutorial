<?php
// 1st. argument: the number of rows
// 2nd. argument: the name of columns
function renderTable($rows, $data) {

  // echo '<pre>',print_r($data,1),'</pre>';

  $columns = array();
  $dataArray = array();
  
  if(!empty($data)){
      $columns = array_keys($data[0]);
      
      echo '<table> 
      <thead>';
  
      foreach ($columns as $name) {
    echo '<th>'.$name.'</th>';
  }
  echo '<thead>
  <tbody>';
  
  foreach ($data as $country) {
    echo '<tr>';
      foreach ($country as $data => $value) {
        echo '<td>'.$value.'</td>';
      }
      '</tr>';
    }
    
    echo '</tbody>
    </table>';
  }
}
?>
