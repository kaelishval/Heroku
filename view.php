<?php include ('config/db.php')?>
<?php include ('config/config.php')?>

<?php 
    //echo 'This is Index Page';
    $sql = 'SELECT * FROM users';
    $statement = $pdo->query($sql);
    while (($row = $statement->fetch(PDO::FETCH_ASSOC)) !== false) {
        echo $row['firstname'] . '<br>';
    }
?>

