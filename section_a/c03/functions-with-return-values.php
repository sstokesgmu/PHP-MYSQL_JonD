<?php
function create_logo()
{
    return '<img src="img/logo.png" alt="Logo">';
}

function count_Up() {
  return 2;
}

function create_copyright_notice()
{
    $year    = date('Y');
    $message = '&copy; ' . $year;
    return $message;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Functions with Return Values</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <header>
      <h1><?= create_logo() ?>The Candy Store</h1>
    </header>
    <article>
      <h2>Welcome to The Candy Store</h2>
    </article>
    <h2><?php echo count_Up() ?></h2>
    <footer>
      <?= create_logo() ?>
      <?= create_copyright_notice() ?>
    </footer>
  </body>
</html>