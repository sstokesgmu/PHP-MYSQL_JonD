<?php 
$prefix  = 'Thank you';
$usr_FirstName   = 'Ivy';
$usr_FirstName   = "Sterling"; //Update the user first name var
$message = $prefix . ', ' . $usr_FirstName; // used the string op to combine the message
$usr_LastName = "Stokes"; // created a new variable
$usr_FullName = "$usr_FirstName $usr_LastName"; // join string without (.) operator
$message2 = $prefix . ', ' . $usr_FullName . ' for '; //setup a new message
$message2 .= "Janae"; //use the concatenating assignment operator

$firstname = "Mona";
$lastname = "Rae";
$fullname = "$firstname $lastname";


?>
<!DOCTYPE html>
<html>
  <head>
    <title>String Operator</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2><?= $usr_FirstName?>'s Order</h2>
    <p><?= $message ?></p>
    <h2> Second Message</h2>
    <p><?= $message2 ?></p>
    <p><?= $fullname ?></p>

  </body>
</html>