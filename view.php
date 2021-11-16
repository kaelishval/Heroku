<?php include ('config/db.php')?>
<?php include ('config/config.php')?>

<?php 
    $sql = "SELECT *FROM users";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>USERS</h2>
    <table class="table">
         <head>
             <tr>
                 <th>ID</th>
                 <th>First Name</th>
                 <th>Last Name</th>
                 <th>Email</th>
                 <th>Gender</th>
                 <th>Action</th>
            </tr>
            </thread>
            </tbody>
                <?php 
                if($result->num_rows>0){
                    while($row=$results->fetch_assoc()){
                
                ?>        
                  <tr>
                      <td><?php echo $row['id']; ?> </td>
                      <td><?php echo $row['firstname']; ?> </td>
                      <td><?php echo $row['lastname']; ?> </td>
                      <td><?php echo $row['email']; ?> </td>
                      <td><?php echo $row['gender']; ?> </td>
                      <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?> ">EDIT</a>&nbsp; <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td> 
                    </tr>
                <?php }
                }
                ?>            

                <tbody>
            </table>
            </div>
            </body
            </html>