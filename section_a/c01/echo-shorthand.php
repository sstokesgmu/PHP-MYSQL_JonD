<?php 
$name      = 'Sterling';
$favorites = ['Gum','Chocolate', 'Toffee', 'Fudge',];
$baseAccount = [
  "username" => "temp",
  "country" => "Usa",
  "accAmount" => "2,300.00" ];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Echo Shorthand</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Welcome <?= $name ?></h2>
    <p>Your favorite type of candy is:
       <?= $favorites[0] ?>.</p>
    <h2>Account Information</h2>
    <p>Username: <?= $baseAccount["username"] ?></p>
    <p>Country Location: <?= $baseAccount["country"] ?></p>
    <p>Account Balance: <?= $baseAccount["accAmount"] ?></p>
  </body>
</html>