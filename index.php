<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>php tutorial</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />


<div>
  <h2>1. Loop</h2>

  <?php
    for ($i = 0; $i <= 10; $i++) {
      echo "{$i}";
      if ($i != 10) {
        echo ",";
      }
    }
  ?>
  </div>

<div>
  <h2>2. A simple if statement</h2>

    <?php
    $age = 20;

    if ($age >= 21) {
      echo "You are old enough to legally get wasted in the USA or in Europe";
    } else if ($age >= 18) {
      echo "You are just old enough to get wasted in Europe buddy";
    } else {
      echo "You are tiny, so please don't touch any alcohol";
    }

    ?>
</div>

<div>
<h2>3. Shorthand if</h2>
<?php
  $status = false;

    echo ($status) ? 'status is true' : 'status is false';
?>

</div>

<div>
<h2>4. Switch</h2>
<?php
  $num = 10;

  switch ($num) {
    case 10:
      echo 'Ten';
      break;
    
    case 9:
      echo 'Nine';
      break;
    
    default:
      echo "Is this a number?";
      break;
  }

  // you can handle more switch cases at the same time
  // switch ($num) {
  //   case 10:
  //   case 9:
  //     echo "Is this a number?";
  //     break;
  // }
?>

</div>

<div>
  <h2>5. Arrays</h2>

    <h4>print_r</h4>
      <p>we can modify the index value of array elements</p>

  <?php
    $list = array('Tibi'=>10, 'Tibsz'=>11, 'TibnBibn'=>101);
    print_r ($list);
  ?>

  <?php
    echo '<br>';
    $list['Tibi']=13;
    print_r ($list);
  ?>
</div>

</body>
</html>