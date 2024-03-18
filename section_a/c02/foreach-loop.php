<?php
$products = [
    'Toffee' => 2.99,
    'Mints'  => 1.99,
    'Fudge'  => 3.49,
];

$product_Games =array(
  'GTA III' => 40.00,
  'DBZ Kakarot' => 50.00,
  'Hades' => 20.00,
  'Persona 3' => 70.00,
);

$product_Books = [
  "Setting Sun", "Watchmen","Fullmetal Alchemuist", "A Game of Thrones", 
  "The Color of Law", "No Longer Human"
];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>foreach Loop</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Price List</h2>
    <table>
      <tr>
        <th>Item</th>
        <th>Price</th>
      </tr>
      <?php foreach ($products as $item => $price) { ?>
        <tr>
          <td><?= $item ?></td>
          <td>$<?= $price ?></td>
        </tr>
      <?php } ?>
    </table>
    <br>
    <h2>Mystery Prize List</h2>
    <table>
      <tr>
        <th>Item</th>
        <th>Price</th>
      </tr>
      <?php foreach($product_Games as $value)  { ?>
        <tr>
          <td><?= '?' ?></td>
          <td>$<?= $value ?></td>
        </tr>
      <?php } ?> 
    </table>
    <br>
    <table>
        <tr>
          <th>Books (Index array)</th>
        </tr>
        <?php foreach($product_Books as $item) { ?>
          <tr>
            <td><?php echo $item ?> 
          </tr>
        <?php } ?>
    </table>

  </body>
</html>