<?php include ('config/db.php')?>
<?php include ('config/config.php')?>
<?php
class test {

public function create($tableName , array $baseStrings){

   $user_id = rand(10,10000);
    
   $sql = "INSERT INTO $tableName (id,first_name__c,last_name__c,email__c,gender__c) VALUES ('$user_id','$baseStrings[0]','$baseStrings[1]','$baseStrings[2]','$baseStrings[3]')";
   $stmt = $pdo->query($sql);
   print_r ($sql);
   
//    if($stmt->execute()){
//     $ids = $user_id;
//     return $ids;
//     }
//     echo "Error";
    
}
public function update($tableName,array $baseStrings, $ids){

    $sql = "UPDATE $tableName SET firstname='$baseStrings[0]',lastname='$baseStrings[1]',email='$baseStrings[2]',gender='$baseStrings[3]' WHERE userid='$ids'";
    $stmt = $pdo->query($sql);
    print_r ($sql);
  
}
public function delete($tableName,$ids){

    $sql = "DELETE FROM $tableName WHERE id='$ids'";
    $stmt = $pdo->query($sql);
    print_r ($sql);
}
}

$test = new test;

$test->create('Salesforce.uzer__c',array('kael','mauro','last@gmail.com','male'));

// $test->update('users',array('test2','test3','test2','test2'),1);

// $test->delete('users','1');

?>
