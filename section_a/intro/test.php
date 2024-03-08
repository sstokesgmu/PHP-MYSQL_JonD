<?php
  $name = 'Sterling';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Testing Installation</title>
</head>
<body>
  <!-- uses my variable to display my name -->
  <h1><?php echo 'Welcome to PHP'.$name.'; MySQL' ?></h1> 
  <h2><?php echo 'Your web server is working'; ?></h2>
  <?php phpinfo(); ?>
</body>
</html>