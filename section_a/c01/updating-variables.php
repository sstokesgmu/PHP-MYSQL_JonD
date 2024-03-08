<?php 
//Initial Values
$name  = "Guest";
$price = 5;

//Updated Values
$name = "Greg";
$price = 10;

$name = "Sterling";
$price = 100;
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Updating Variables</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Welcome <?php echo $name; ?></h2>
    <p>The cost of your candy is 
       $<?php echo $price; ?> per pack.</p>
  </body>
</html>