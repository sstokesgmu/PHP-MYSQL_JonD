<?php $location = filter_input(INPUT_GET, 'city'); ?>
<?php include 'includes/header.php'; ?>

<a href="filter_input.php?city=London">London</a> | 
<a href="filter_input.php?city=Sydney">Sydney</a> |
<a href="filter_input.php?city=Plainfield">Plainfield</a>
<pre><?php var_dump($location); ?></pre>

<?php include 'includes/footer.php'; ?>