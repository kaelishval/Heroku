<?php include ('config/db.php')?>
<?php include ('config/config.php')?>

<?php 
    //echo 'This is Index Page';
    $sql = 'SELECT * FROM users';
    $statement = $pdo->query($sql);
    // while (($row = $statement->fetch(PDO::FETCH_ASSOC)) !== false) {
    //     echo $row['firstname'] . '<br>';
    //     echo $row['lastname'] . '<br>';
    //     echo $row['email'] . '<br>';
    //     echo $row['gender'] . '<br>';
    // }
?>
<body>
    <div class="container">
        <h2>USERS</h2>
        <a class="nav-link" href="index.php">BACK</a>
    <table class="table">
         <head>
             <tr>
             <th>ID</th>
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
                      <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?> ">EDIT</a>&nbsp; <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td> 
                    </tr>
                <?php }
                
                ?>            

                <tbody>
            </table>
            </div>
            </body
            </html>
