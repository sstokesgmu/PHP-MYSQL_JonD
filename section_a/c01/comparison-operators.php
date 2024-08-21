<?php 
$item    = 'Chocolate';
$stock   = 5;
$wanted  = 8;
$can_buy = ($wanted <= $stock);

//My variable additions
$numberOfItems = 9;
$monthsSubscribed = 4.5;
$can_get_discount1 = ($monthsSubscribed >= 3);
$can_get_discount2 = ($numberOfItems > 8);
$a = 1;
$b = 1;
$spaceship_Compare1 = ($a <=> $b);
$a = 2;
$spaceship_Compare2 = ($a <=> $b);
$a = -1;
$spaceship_Compare3 = ($a <=> $b);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Comparison Operators</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Shopping Cart</h2>
    <p>Item:    <?= $item ?></p>
    <p>Stock:   <?= $stock ?></p>
    <p>Wanted:  <?= $wanted ?></p>
    <p>Can buy: <?= $can_buy ?></p> <!-- Won't print because it is false -->
    <p>Discount 1 Available: <?= $can_get_discount1 ?></p>
    <p>Discount 2 Available: <?= $can_get_discount2 ?></p>
    <p>Spaceship Compare1: <?php echo $spaceship_Compare1; ?></p>
    <p>Spaceship Compare2: <?php echo $spaceship_Compare2; ?></p>
    <p>Spaceship Compare3: <?php echo $spaceship_Compare3; ?></p>
  </body>
</html>