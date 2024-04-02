<?php
include 'classes/Account.php';
include 'classes/Customer.php';

$accounts = [new Account(20489446, 'Checking', -20),
             new Account(20148896, 'Savings', 380),];
$accounts2 = [new Account(20489446, 'Checking', -50),
             new Account(20348896, 'Savings', 3100),];
 

$customers = [new Customer('Ivy', 'Stone', 'ivy@eg.link', 'Jup!t3r2684', $accounts),
              new Customer('Ben', 'Jones', 'example@eg.link', 'naemMe', $accounts2),];
?>

<?php include 'includes/header.php'; ?>
<h2><b><?php foreach ($customers as $customer) {?>
      Name: <?= $customer -> getFullName()?><br>
  <?php }?>  
</h2>

<table>
  <tr>
    <th>Account Number</th>
    <th>Account Type</th>
    <th>Balance</th>
  </tr>

  <?php foreach ($customers as $customer) { ?>
    <?php foreach ($customer->accounts as $account) { ?> 
    <tr>
      <td> <?= $account->number ?></td>
      <td> <?= $account->type ?></td>
      <?php if ($account->getBalance() >= 0) {?>
        <td class "credit">  
      <?php } else { ?>
        <td class = "overdrawn">
      <?php }?>
      $ <?= $account->getBalance() ?> </td>
    </tr>
    <?php } ?>
  <?php } ?>
</table>
<?php include 'includes/footer.php'; ?>