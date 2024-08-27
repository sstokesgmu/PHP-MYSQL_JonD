<?php
class Customer
{
    public string $forename;
    public string $surname;
    public string $email;
    public string $password;
}

class Account
{
    public int    $number;
    public string $type;
    public float  $balance;
}

class Item
{
  public string $name;
  public float $price;
}

$customer = new Customer();
$account  = new Account();
$item = new Item();
$customer ->forename = "Casey";
$customer ->surname = "Jones";
$customer->email  = 'ivy@eg.link';
$account->balance = 1000.00;
$item -> name = "Coffee";
?>
<?php include 'includes/header.php'; ?>
  <p>Welcome Back, <?= $customer->forename. ' '.$customer->surname; ?></p>
  <p>Email: <?= $customer->email ?></p>
  <p>Balance: $<?= $account->balance ?></p>
  <p>Item In Cat:  <?= $item->name ?></p>
<?php include 'includes/footer.php'; ?>

