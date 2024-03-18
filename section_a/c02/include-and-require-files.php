<?php 
$stock = 25;

if ($stock >= 10) {
    $message = 'Good availability';
}
if ($stock > 0 && $stock < 10) {
    $message = 'Low stock';
}
if ($stock == 0) {
    $message = 'Out of stock';
}

$product_Games =array(
    'GTA III' => 40.00,
    'DBZ Kakarot' => 50.00,
    'Hades' => 20.00,
    'Persona 3' => 70.00,
);

$product_Books = [
    "Setting Sun", "Watchmen","Fullmetal Alchemuist", "A Game of Thrones", 
    "The Color of Law", "No Longer Human"
];

?>
<?php require_once 'includes/header.php'; ?>

<h2>Chocolate</h2>
<p><?= $message ?></p>

<?php include 'includes/table.php'; ?>

<?php include 'includes/footer.php'; ?>