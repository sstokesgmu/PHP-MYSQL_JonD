<?php 
$nutrition = [
    'fat'   => 38, 
    'sugar' => 51, 
    'salt'  => 0.25,
];
$nutrition['fat']   = 36;
$nutrition['fiber'] = 2.1;
$nutrition['protien'] = 7.3;

$shoppingList = ["Chocolate", "Bread", "Butter", "Cheese","Bubble Gum"];
//Change the first and last element in the array to another Item 
$shoppingList[0] = "Yougurt";
$shoppingList[4] = "Doonuts";

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Updating Arrays</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Nutrition (per 100g)</h2>
    <p>Fat:   <?php echo $nutrition['fat']; ?>%</p>
    <p>Sugar: <?php echo $nutrition['sugar']; ?>%</p>
    <p>Salt:  <?php echo $nutrition['salt']; ?>%</p>
    <p>Fiber: <?php echo $nutrition['fiber']; ?>%</p>
    <p>Protien: <?php echo $nutrition['protien']; ?>%</p>
    <p>Item in Your Shopping List: <?php echo $shoppingList[0]; ?></p>
    <p>Item in Your Shopping List: <?php echo $shoppingList[4]; ?></p>
  </body>
</html>