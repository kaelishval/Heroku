<?php include ('config/db.php')?>
<?php include ('config/config.php')?>

<?php 
    //echo 'This is Index Page';
    $sql = 'SELECT * FROM users';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $rowCount = $stmt->rowCount();
    $details = $stmt->fetch();
  
    

    while( $details !== false){
        echo $details['firstname']. '<br>';
        echo $details['lastname']. '<br>';
        echo $details['email']. '<br>';
        echo $details['gender']. '<br>';
    }
    print_r ($details);
?>

