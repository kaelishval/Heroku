
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

    $sql = "UPDATE $tableName SET id='$ids',first_name__c='$baseStrings[0]',last_name__c='$baseStrings[1]',email__c='$baseStrings[2]',gender__c='$baseStrings[3]' WHERE id='$ids'";
    $stmt = $pdo->query($sql);
    print_r($stmt); 
    
  
}
public function delete($pdo,$tableName,$ids){

    $sql = "DELETE FROM $tableName WHERE id='$ids'";
    $stmt = $pdo->query($sql);
    print_r($stmt); 

}
public function testStartTime($pdo)
{
  $sql = "SELECT * FROM salesforce._trigger_log ORDER BY id DESC LIMIT 1";
  $stmt = $pdo->query($sql);
  print_r($stmt); 
  while (($row = $stmt->fetch(PDO::FETCH_ASSOC)) !== false) {
    return print("Action: " . $row["action"] . " || " . $row["processed_at"]);
  }
}
public function logResults($pdo)
  {
    $sql = "SELECT * FROM salesforce._trigger_log ORDER BY id DESC LIMIT 1";
    $stmt = $pdo->query($sql);

    foreach ($stmt as $row) {
      return print("ID: " . $row["id"] . " || " . "Table Name: " . $row["table_name"] . " || " .
        "Action: " . $row["action"] . " || " . "State: " . $row["state"] . "<br>Values: " . $row["values"] . "<br>");
    }
  }
}
print("<br><br> CUD class test:<br>------------------------<br>");
$tests = new test;
print("<br>CREATE:<br><br>");
$tests->create($pdo,'Salesforce.uzer__c',array('kael','mauro','last@gmail.com','male'));
print("<br>UPDATE:<br><br>");
// $tests->update($pdo,'Salesforce.uzer__c',array('test','test','test','test'),404);
print("<br>DELETE:<br><br>");
// $tests->delete($pdo,'Salesforce.uzer__c',404);
print("<br>Time triggered:<br><br>");
$tests->testStartTime($pdo);
print("<br><br>Test Details:<br><br>");
$triggerLog->logResults($pdo);
?>
