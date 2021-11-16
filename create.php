<?php
    include "config/db.php";
    include "config/config.php";

   if (isset($_POST['submit'])) {

       $first_name = $_POST['firstname'];
       $last_name = $_POST['lastname'];
       $email = $_POST['email'];
       $gender =  $_POST['gender'];
   }
   $sql = "INSERT INTO 'users' ('firstname','lastname','email','gender') VALUES ('$first_name','$last_name','$email','$gender')";

   $result = $conn->query($sql);

   if($result == TRUE){
       echo "NEW RECORD CREATED SUCCESSFULLY";

   }else{
    echo "Error:" .$sql."<br>".$conn->error;
   }

   $conn->close();


?>

