<?php include ('config/db.php')?>
<?php include ('config/config.php')?>

<?php

session_start();

$regValue = $_GET['regName'];

echo "Your registration is: ".$regValue.".";

?>

