<?php 
$best_sellers = ['Chocolate', 'Mints', 'Fudge',
    'Bubble gum', 'Toffee', 'Jelly beans', 'Licorice'];

$manga_Wishlist =array("Sakamoto Days Vol.12","Jujutsu Kaisen, Vol. 23",
    "Jujustu Kaisen, Vol. 24", "Berserk, Vol. 20", "Berserk, Vol. 19", "Dragon Ball Z, Vol. 4");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Indexed Arrays</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Best Sellers</h2>
    <ul>
      <li><?php echo $best_sellers[0]; ?></li>
      <li><?php echo $best_sellers[1]; ?></li>
      <li><?php echo $best_sellers[2]; ?></li>
      <li><?php echo $best_sellers[3]; ?></li>
      <li><?php echo $best_sellers[4]; ?></li>
      <li><?php echo $best_sellers[5]; ?></li>
    </ul>
    <h1>The Manga Wishlist</h1>
    <h2>Ordered (Top to Bottom)</h2>
    <ul>
      <li><?php echo $manga_Wishlist[5]; ?></li>
      <li><?php echo $manga_Wishlist[1]; ?></li>
      <li><?php echo $manga_Wishlist[2]; ?></li>
      <li><?php echo $manga_Wishlist[3]; ?></li>
    </ul> 
    
  </body>
</html>