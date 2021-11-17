<?php include ('config/db.php')?>
<?php include ('config/config.php')?>

<?php

session_start();

$regValue = $_GET['regName'];


$sql = "DELETE FROM users WHERE userid='$regValue'";
$stmt = $pdo->prepare($sql);
$stmt->execute();  
// echo "Entry DELETED";
header("Location: view.php"); 
?>

<a class="nav-link" href="view.php">BACK</a>
