<?php include ('config/db.php')?>
<?php include ('config/config.php')?>

<?php

session_start();

$regValue = $_GET['regName'];


$sql = "DELETE FROM users WHERE 'userid'='2'";
  
print_r ($sql);

?>
