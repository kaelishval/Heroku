<?php include ('config/db.php')?>
<?php include ('config/config.php')?>

<?php
   if (isset($_POST['submit'])) {

       $first_name = $_POST['firstname'];
       $last_name = $_POST['lastname'];
       $email = $_POST['email'];
       $gender =  $_POST['gender'];
   }
   $sql = "INSERT INTO users (firstname,lastname,email,gender) VALUES ('$first_name','$last_name','$email','$gender')";

   $result = $conn->query($sql);

   if($result == TRUE){
       echo "NEW RECORD CREATED SUCCESSFULLY";

   }else{
    echo "ERRORRR";
   }

   $conn->close();
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
        <input type="submit" name="submit" value="submit" />
      </fieldset>
    </form>
  </body>
</html>
