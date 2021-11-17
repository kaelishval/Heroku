<?php include ('config/db.php')?>
<?php include ('config/config.php')?>

<?php

session_start();

$regValue = $_GET['regName'];


echo $regValue;

?>

<a class="nav-link" href="view.php">BACK</a>