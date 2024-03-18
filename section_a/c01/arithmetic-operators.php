<?php 
$items    = 10;
$cost     = 50;
$subtotal = $cost * $items;
$tax      = ($subtotal / 100) * 20;
$discount = ($subtotal / 100) * 25;
$total    = $subtotal + $tax - $discount;

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Mathematical Operators</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Shopping Cart</h2>
    <p>Items: <?= $items ?></p>
    <p>Cost per pack: $<?= $cost ?></p>
    <p>Subtotal: $<?= $subtotal ?></p>
    <p>Tax: $<?= $tax ?></p>
    <p>Discount: $<?= $discount ?></p>
    <p>Total: $<?= $total ?></p>
  </body>
</html>