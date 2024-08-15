<?php

// Here we created two associative arrays
$nutrition = [
  'fat' => 16,
  'sugar' => 51,
  'salt' => 6.3,
  'protien' => 2.6,
];

$user = [
  "name" => "Mary",
  "age" => 45.5,
  "numOfPurchases" => 70,
  "isAlive" => true,
];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Associative Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
  <p>Fat:
    <?php echo $nutrition['fat']; ?>%
  </p>
  <p>Sugar:
    <?php echo $nutrition['sugar']; ?>%
  </p>
  <p>Salt:
    <?php echo $nutrition['salt']; ?>%
  </p>
  <p>Protien:
    <?php echo $nutrition['protien']; ?>%
  </p>
  <h2> User Information</h2>
  <p> Name:
    <?php echo $user["name"]; ?>
  </p>
  <p> Age:
    <?php echo $user["age"]; ?>
  </p>
  <p> Number of Purchases? :
    <?php echo $user["numOfPurchases"]; ?>
  </p>
  <p> Is Alive?:
    <?php echo $user[(string) "isAlive"]; ?> (1 means true btw)
  </p>
</body>
</html>