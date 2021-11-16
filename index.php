<?php include ('config/db.php')?>
<?php include ('config/config.php')?>


   <?php
   echo 'This is Index Page';
 
   $sql = 'SELECT * FROM users';
   $stmt = $pdo->prepare($sql);
   $stmt->execute();
   $rowCount = $stmt->rowCount();
   $details = $stmt->fetch();
  
   print_r ($details);
 
   
 ?>


<html>
  <body>
    <h2>CREATE</h2>

    <form action="create.php" method="POST">
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
