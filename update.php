<?php include ('config/db.php')?>
<?php include ('config/config.php')?>

<?php

session_start();

$regValue = $_GET['regName'];
// $sql = "UPDATE users SET userid='test',firstname='test',lastname='test',email='test',gender='test' WHERE id='$regValue'";
// print_r ($sql);


if ($_POST['submit']=='save') {
    // header("Location: view.php");  
    $user_id = $_POST['userid'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $gender =  $_POST['gender'];

    $sql = "UPDATE users SET userid='$user_id',firstname='$first_name',lastname='$last_name',email='$email',gender='$gender' WHERE userid='$regValue'";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute();
    // $rowCount = $stmt->rowCount();
    // $details = $stmt->fetch();
   
    print_r ($sql);

}

?>



<html>
  <body>
    <h2>UPDATE</h2>
    
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