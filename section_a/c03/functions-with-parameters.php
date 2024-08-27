<?php
function calculate_total($price, $quantity)
{
    $cost  = $price * $quantity;
    $tax   = $cost  * (20 / 100);
    $total = $cost + $tax;
    return $total;
}

function create_item ($adj, $noun) {
  return $adj. ' '.$noun; 
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Functions with Parameters</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <p>Mints:  $<?= calculate_total(2, 5) ?></p>
    <p>Toffee: $<?= calculate_total(3, 5) ?></p>
    <p>Fudge:  $<?= calculate_total(5, 4) ?></p>
    <h1> Items </h1>
    <p>Item 1: <?php echo create_item('Running', 'Bear') ?></p>
    <p>Item 2: <?php echo create_item('Flying', 'Monkey') ?></p>
    <p>Item 3: <?php echo create_item('Raging', 'Gecko') ?></p>
  </body>
</html>
