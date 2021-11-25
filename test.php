<?php



$host = "ec2-18-235-154-252.compute-1.amazonaws.com";
$user = "ajpiganlxdmpab";
$password = "f57de192a79b0d042533cd7772a5ac6e66d70bf6cb4c7b18acac64b26a2e03e2";
$dbname = "db4vttbnb1juur";
$port = "5432";

try{
  //Set DSN data source name
    $dsn = "pgsql:host=" . $host . ";port=" . $port .";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";


  //create a pdo instance
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
  

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

    $sql = "UPDATE $tableName SET id='$user_id',first_name__c='$first_name',last_name__c='$last_name',email__c='$email',gender__c='$gender' WHERE id='$ids'";
    $stmt = $pdo->query($sql);
    print_r ($sql);
  
}
public function delete($tableName,$ids){

    $sql = "DELETE FROM $tableName WHERE id='$ids'";
    $stmt = $pdo->query($sql);
    print_r ($sql);
}
}
print("<br><br> CUD class test:<br>------------------------<br>");
$tests = new test;
print("<br>CREATE:<br><br>");
$tests->create('Salesforce.uzer__c',array('kael','mauro','last@gmail.com','male'));
print("<br>UPDATE:<br><br>");
// $tests->update('Salesforce.uzer__c',array('test2','test3','test2','test2'),1);
print("<br>DELETE:<br><br>");
// $tests->delete('Salesforce.uzer__c','1');
?>
