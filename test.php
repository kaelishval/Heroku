
<?php include ('config/db.php')?>
<?php include ('config/config.php')?>
<?php
class test {

public function create($pdo,$tableName , array $baseStrings){
   
   $user_id = rand(10,10000);
    
   $sql = "INSERT INTO $tableName (id,first_name__c,last_name__c,email__c,gender__c) VALUES ('$user_id','$baseStrings[0]','$baseStrings[1]','$baseStrings[2]','$baseStrings[3]')";
   $stmt = $pdo->query($sql);
   print_r($stmt); 
}
public function update($pdo,$tableName,array $baseStrings, $ids){

    $sql = "UPDATE $tableName SET id='$user_id',first_name__c='$first_name',last_name__c='$last_name',email__c='$email',gender__c='$gender' WHERE id='$ids'";
    $stmt = $pdo->query($sql);
    print_r($stmt); 
    
  
}
public function delete($pdo,$tableName,$ids){

    $sql = "DELETE FROM $tableName WHERE id='$ids'";
    $stmt = $pdo->query($sql);
    print_r($stmt); 

}
}
print("<br><br> CUD class test:<br>------------------------<br>");
$tests = new test;
print("<br>CREATE:<br><br>");
// $tests->create($pdo,'Salesforce.uzer__c',array('kael','mauro','last@gmail.com','male'));
print("<br>UPDATE:<br><br>");
$tests->update($pdo,'Salesforce.uzer__c',array('test2','test3','test2','test2'),1461);
print("<br>DELETE:<br><br>");
// $tests->delete('Salesforce.uzer__c','1');
?>
