<?php include ('config/db.php')?>
<?php include ('config/config.php')?>

<?php

 echo "Hello there , HEROKU!!!";

 
 //echo 'This is Index Page';

 $sql = 'SELECT * FROM users';
 $stmt = $pdo->prepare($sql);
 $stmt->execute();
 $rowCount = $stmt->rowCount();
 $details = $stmt->fetch();

 print_r ($details);


?>

