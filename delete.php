<?php include ('config/db.php')?>
<?php include ('config/config.php')?>
<?php
 if(isset($_GET['userid'])){
     $user_id=$_GET['userid'];

$sql = "DELETE FROM users WHERE 'userid'='$user_id'";
  
  
 }
 ?>