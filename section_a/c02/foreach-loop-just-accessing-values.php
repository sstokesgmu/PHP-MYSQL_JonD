<?php
//Index Array
$best_sellers = ['Toffee', 'Mints', 'Fudge','Icecream'];

//Associative Array
$best_games_sellers =array(
    'GTA III' => 40.00,
    'DBZ Kakarot' => 50.00,
    'Hades' => 20.00,
    'Persona 3' => 70.00,
);

?>
<!DOCTYPE html>
<html>
  <head>
    <title>foreach Loop - Just Accessing Values</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Best Sellers</h2>
    <!-- Index Array writing out values only-->
    <?php foreach ($best_sellers  as $product) { ?>
      <p><?= $product ?></p>
    <?php } ?>
    <h2>Best Selling Games</h2>
    <!--Associative Array writing out the key and value -->
    <table>
        <tr>
            <th>Game</th>
            <th>Price</th>
        </tr>
        <?php foreach($best_games_sellers as $game => $price) { ?>

           <tr>
               <td><?= $game ?></td>
               <td>$<?= $price ?></td>
           </tr>
    <?php } ?>
    </table>
  </body>
</html>
