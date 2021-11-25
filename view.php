<?php include ('config/db.php')?>
<?php include ('config/config.php')?>

<?php 
    
    $sql = 'SELECT * FROM Salesforce.uzer__c';
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
        <a class="nav-link" href="test.php">TEST</a>
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
                     <td><?php echo $row['id']; ?> </td>
                      <td><?php echo $row['first_name__c']; ?> </td>
                      <td><?php echo $row['last_name__c']; ?> </td>
                      <td><?php echo $row['email__c']; ?> </td>
                      <td><?php echo $row['gender__c']; ?> </td>
                      <td> 
                        <form method="get" action="update.php">
                        <input type="hidden" name="regName" value="<?php echo $row['id']; ?>">
                        <button type="submit" >Update</button>
                        </form>
                        <form method="get" action="delete.php">
                        <input type="hidden" name="regName" value="<?php echo $row['id']; ?>">
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
