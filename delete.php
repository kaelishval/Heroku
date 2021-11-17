<?php include ('config/db.php')?>
<?php include ('config/config.php')?>

<?php

session_start();

$regValue = $_GET['regName'];


$sql = "DELETE FROM users WHERE userid='$regValue'";
$stmt = $pdo->prepare($sql);
$stmt->execute();  
echo "Entry DELETED";

?>

<a class="nav-link" href="index.php">BACK</a>
