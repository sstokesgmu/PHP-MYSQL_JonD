<?php
$name = "Sterling";
$character = 'C';
$price = 2;
$tax = .12;
$paid = true;
?>
<!DOCTYPE html>
<html>

<head>
  <title>Variables</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Welcome
    <?php echo $name; ?>
  </h2>
  <p>The cost of your candy is
    $
    <?php echo $price; ?> per pack.
  </p>
  <p>The tax is
    <?php echo $tax; ?>.
  </p>
  <p>Has the customer paid?
    <?php echo $paid; ?>
  <p>
  <p>This is a test to see </p>
  <br>
  <p>if the interperter understands single characters:
    <?php echo $character; ?>
  </p>


</body>

</html>