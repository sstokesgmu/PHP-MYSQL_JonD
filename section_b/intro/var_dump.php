<?php
$username    = 'Ivy';

$user_array  = [
    'name'   => 'Ivy',
    'age'    => 24,
    'active' => true,
    'race' => 'African-American',
];

class User
{
    public $name;
    public $age;
    public $active;
    public $race;
    public function __construct($name, $age, $active, $race) {
        $this->name   = $name;
        $this->age    = $age;
    $this->active = $active;
    $this->race = $race;
    }
}

$user_object = new User('Ivy', 24, true, 'African-American');
?>
<?php include 'includes/header.php' ?>

  <p>Scalar: <?php var_dump($username); ?></p>
  <p>Array:  <?php var_dump($user_array); ?></p>
  <!-- is there an access modifier for $user_object-->
  <pre>Object: <?php var_dump($user_object); ?></pre>

<?php include 'includes/footer.php' ?>
