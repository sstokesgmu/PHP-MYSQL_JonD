<?php 
  /* 
  This page displays the member's name
  and details of a current offer
  */
  $name = 'Sterling';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Adding Comments to Your Code</title>
    <link rel="stylesheet" href="css/styles.css"> 
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2><?php echo 'Welcome'.$name; // Show name ?></h2> 
    <?php echo '<p class="offer">Offer: 20% off</p>' // Show offers ?> 
  </body>
</html>