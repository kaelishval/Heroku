<?php include ('config/db.php')?>
<?php include ('config/config.php')?>

<?php

session_start();

$regValue = $_GET['regName'];


$sql = "DELETE FROM Salesforce.uzer__c WHERE id='$regValue'";
$pdo->query($sql);
  
// echo "Entry DELETED";
header("Location: view.php"); 
?>

<a class="nav-link" href="view.php">BACK</a>
