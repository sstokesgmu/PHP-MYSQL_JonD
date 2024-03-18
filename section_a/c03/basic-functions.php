<?php
//Array
$product_Games = array(
  'GTA VI' => 70.00,
  'DBZ Kakarot' => 60.00,
  'Cult_Of_The_Lamb' => 24.00,
  'Persona 3' => 70.00,
  'Hades 2' => 40.00
);

function write_logo()
{
    echo '<img src="img/logo.png" alt="Logo">';
}

function list_game_prices(){
  global $product_Games;
  foreach ($product_Games as $game => $price)
  {
    echo 'this is the game '. $game .' and '. $price . "\n";
    echo "<hr>";
  }
}

function write_copyright_notice()
{
    $year = date('Y');
    echo '&copy; ' . $year;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Basic Functions</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <header>
      <h1><?php write_logo() ?> The Candy Store</h1>
    </header>
    <article>
      <h2>Welcome to the Candy Store</h2>
    </article>
    <p><?php list_game_prices() ?></p>
    <footer>
      <?php write_logo() ?>
      <?php write_copyright_notice() ?>
    </footer>
  </body>
</html>