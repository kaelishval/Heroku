<?php include ('config/db.php')?>
<?php include ('config/config.php')?>

<?php 
    //echo 'This is Index Page';

  $sql = 'SELECT * FROM users';
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $rowcount = $stmt->$num_rows;
  $details = $stmt->fetch();

  print_r ($rowcount);
?>

