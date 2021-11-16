<?php include ('config/db.php')?>
<?php include ('config/config.php')?>

<?php 
    $sql = "SELECT *FROM users";
    $result = $conn->query($sql);
    $stmt->execute();
    $rowCount = $stmt->rowCount();
    $details = $stmt->fetch();
   
    print_r ($details);
?>

