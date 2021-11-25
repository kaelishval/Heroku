<?php include ('config/db.php')?>
<?php include ('config/config.php')?>


   <?php
   if ($_POST['submit']=='save') {
    header("Location: view.php"); 
    $user_id = rand(10,10000);
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $gender =  $_POST['gender'];
      
   $sql = "INSERT INTO Salesforce.uzer__c (id,first_name__c,last_name__c,email__c,gender__c) VALUES ('$user_id','$first_name','$last_name','$email','$gender')";
   $stmt = $pdo->query($sql);
   
   print_r ($sql);
   }
   
 ?>

<html>
  <body>
    <h2>CREATE</h2>
    <a class="nav-link" href="view.php">VIEW</a>
    <form action="" method="POST">
      <fieldset>
        <legend>Insert Info</legend>
      
        First Name:<br />
        <input type="text" name="firstname" />
        <br />
        Last Name:<br />
        <input type="text" name="lastname" />
        <br />
        email:<br />
        <input type="text" name="email" />
        <br />
        Gender:<br />
        <input type="radio" name="gender" value="male" />Male
        <input type="radio" name="gender" value="female" />Female <br /><br />
        <input type="submit" name="submit" value="save" />
      </fieldset>
    </form>
  </body>
</html>
