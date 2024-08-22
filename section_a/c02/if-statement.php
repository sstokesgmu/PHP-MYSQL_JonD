<?php 
$username     = 'Sterling';
$greeting = 'Hello';

if ($username === 'Ben') { // Condition is checking if them have a username
    $greeting = 'Welcome back, ' . $username;
}
else {
  $username = '';
  $greeting = 'Welcome to the site, guest';
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>if Statement</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
    <h1>The Candy Store</h1>
    <h2><?= $greeting ?></h2>
  </body>
</html>
