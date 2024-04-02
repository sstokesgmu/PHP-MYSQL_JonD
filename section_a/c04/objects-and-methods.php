<?php
class Account
{
    public int    $number;
    public string $type;

    public $balance = 0.00; // Dynamic typing 

    public function deposit(float $amount): float
    {
        $this->balance += $amount;
        return $this->balance;
    }

    public function withdraw(float $amount): float
    {
        $this->balance -= $amount;
        return $this->balance;
    }
    public function transfer(float $amount): mixed // return a string or float
    {
        if($this -> balance > 0){
            $this ->balance -= $amount;
        }
        else
            return "Insufficient Funds";
    }
}

$account = new Account(100, "Sterling's Account", 500.60);
$account->balance = 100.00;
?>
<?php include 'includes/header.php'; ?>
  <p>$<?= $account->deposit(50.00) ?></p>
  <p>$<?php echo $account->withdraw(90.00) ?></p>
  <p> call function deposit 1000 and withdraw 500</p>
  <p>$<?= $account->deposit(1000.00) ?></p>
  <p>$<?php echo $account->withdraw(500) ?></p>
<?php include 'includes/footer.php'; ?>