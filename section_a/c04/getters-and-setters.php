<?php
declare(strict_types = 1);

class Account {
    public    int    $number;
    public    string $type;
    protected float  $balance;

    public function __construct(int $number, string $type, float $balance = 0.00)
    {
        $this->number  = $number;
        $this->type    = $type;
        $this->balance = $balance;
    }

    public function deposit(float $amount): float
    {
        $this->balance += $amount;
        return $this->balance;
    }

    public function withdraw(float $amount):string
    {
        if($this-> balance >= $amount)
        {
            $this->balance -= $amount;
            return "Withdraw successful. New Balance: $". $this->balance;
        }
        else 
            return "Cannot Withdraw Balance too low";
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}

$account = new Account(20148896, 'Savings', 80.00);
?>
<?php include 'includes/header.php'; ?>
<h2><?= $account->type ?> Account</h2>
<p>Previous balance: $<?= $account->getBalance() ?></p>
<p>New balance: $<?= $account->deposit(35.00) ?></p>
<!-- Check is balance value is > 0 then we can withdraw-->
<p><?php echo $account->withdraw(100.00) ?></p>
<?php include 'includes/footer.php'; ?>