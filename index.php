<?php include ('config/db.php')?>
<?php include ('config/config.php')?>


   <?php
   if ($_POST['submit']=='save') {
    $user_id = $_POST['userid'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $gender =  $_POST['gender'];
    
   $sql = "INSERT INTO users (userid,firstname,lastname,email,gender) VALUES ('$user_id','$first_name','$last_name','$email','$gender')";
   $stmt = $pdo->prepare($sql);
   $stmt->execute();
   $rowCount = $stmt->rowCount();
   $details = $stmt->fetch();
  
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
        User ID:<br />
        <input type="text" name="userid" />
        <br />
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
