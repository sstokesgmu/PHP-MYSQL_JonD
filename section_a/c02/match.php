<?php

//You need to set the variable before it is called in the echo statement
$day = 'Monday';
$month = '';

$offer = match($day) {
    'Monday'             => '20% off chocolates',
    'Saturday', 'Sunday' => '20% off mints',
    default              => '10% off your entire order',
};

$offer_month = match($month) {
    'August' => 'Buy two chocolates, get five free',
    'December' => 'Buy ten mints, get one free',
    default => 'Buy five items, get 10% off your entire order',
};
?>
<!DOCTYPE html>
<html>
  <head>
    <title>match Expression</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Offers on <?= $day ?></h2>
    <p><?= $offer ?></p>
    <p><?php echo $offer_month; ?></p>
  </body>
</html>
