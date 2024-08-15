<?php 
//Initial Values
$name  = "Guest";
$price = 5;

//Updating Values
$name = "Greg";
$price = 10;

$name = "Sterling";
$price = 100;
?>
<!DOCTYPE html>
<html lang="">
  <head>
    <title>Updating Variables</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <!-- PHP Display Price and Name -->
    <h2>Welcome <?php echo $name; ?></h2>
    <p>The cost of your candy is 
       $<?= $price; ?> per pack.</p> <!-- PHP echo shorthand -->
  </body>
</html>