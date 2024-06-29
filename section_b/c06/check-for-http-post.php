ex<?php include 'includes/header.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $term = $_POST['term'];
    echo 'You searched for ' . htmlspecialchars($term);
} else { ?>
    <form action="check-for-http-post.php" method="POST">
        <input type="hidden" name="submitted" value="true"> <!--added the hidden value here-->
      Search for: <input type="search" name="term">
      <input type="submit" value="search">
    </form>
<?php } ?>

<?php include 'includes/footer.php'; ?> 