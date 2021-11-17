<?php include ('config/db.php')?>
<?php include ('config/config.php')?>

<?php 
    
    $sql = 'SELECT * FROM users';
    $statement = $pdo->query($sql);
   
?>
<?php

session_start();

$_SESSION['regName'] = $regValue;

?>
<body>
    <div class="container">
        <h2>USERS</h2>
        <a class="nav-link" href="index.php">BACK</a>
    <table class="table">
         <head>
             <tr>
            
                <th>User ID</th>
                 <th>First Name</th>
                 <th>Last Name</th>
                 <th>Email</th>
                 <th>Gender</th>
                 <th>Action</th>
            </tr>
            </thread>
            </tbody>
                <?php 
                
                    while (($row = $statement->fetch(PDO::FETCH_ASSOC)) !== false) {
                
                ?>        
                  <tr>
                     <td><?php echo $row['userid']; ?> </td>
                      <td><?php echo $row['firstname']; ?> </td>
                      <td><?php echo $row['lastname']; ?> </td>
                      <td><?php echo $row['email']; ?> </td>
                      <td><?php echo $row['gender']; ?> </td>
                      <td> 
                        <form method="get" action="update.php">
                        <input type="hidden" name="regName" value="<?php echo $row['userid']; ?>">
                        <button type="submit" >Update</button>
                        </form>
                        <form method="get" action="delete.php">
                        <input type="hidden" name="regName" value="<?php echo $row['userid']; ?>">
                        <button type="submit" >Delete</button>
                        </form></td> 
                     
                    </tr>
                <?php }
                
                ?>            

                <tbody>
            </table>
            </div>
            </body
            </html>
