<?php 
$username     = 'Sterling';
$greeting = 'Hello';

if ($username !== ' ' && $username !== '') { // Condition is checking if theym have a username
    $greeting = 'Welcome back, ' . $username;
}
else {
  $username = 'guest';
  $greeting = 'Welcome, ' . $username;
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
