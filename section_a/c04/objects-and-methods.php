<?php
class Account
{
    public int    $number;
    public string $type;
    public float  $balance;

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

$account = new Account();
$account->balance = 100.00;
?>
<?php include 'includes/header.php'; ?>
  <p>$<?= $account->deposit(50.00) ?></p>
  <p>$<?php echo $account->withdraw(90.00) ?></p>
<?php include 'includes/footer.php'; ?>