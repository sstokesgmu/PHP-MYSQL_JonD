<?php 
$item    = 'Chocolate';
$stock   = 5;
$wanted  = 3;
$deliver = true;
$can_buy = (($wanted <= $stock) and ($deliver == true));

//My variable additions
$numberOfItems = 9;
$monthsSubscribed = 4.5;
$a = 1;
$b = 3;
$can_get_discount1 = (($wanted > $stock/2) or ($deliver == true));
$can_get_discount2 = (($wanted < $stock) and ($deliver == true));
$not_Check = !($a < $b);
$spaceship_Compare = !($b <=> $a);

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Logical Operators</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h1>Shopping Cart</h1>
    <p>Item:    <?= $item ?></p>
    <p>Stock:   <?= $stock ?></p>
    <p>Wanted: <?= $wanted ?></p>
    <p>Can buy: <?= $can_buy ?></p>
    <p>Discount 1: <?php echo $can_get_discount1; ?></p>
    <p>Discount 2: <?php echo $can_get_discount2; ?></p>
    <p> When you echo FALSE, it doesn’t print anything.</p>
    <p>Not Check: <?= $not_Check ?></p>
    <p>Spaceship Not: <?= $spaceship_Compare ?></p>
  </body>
</html>