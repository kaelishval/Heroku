<?php include('config/db.php') ?>
<?php include('config/config.php') ?>
<?php include('triggerLog.php') ?>
<?php

$triggerlog = new TriggerLogResults;

class test
{

  public $triggerLog;

  public function create($pdo, $tableName, array $baseStrings)
  {

    $user_id = rand(10, 10000);

    $sql = "INSERT INTO $tableName (id,first_name__c,last_name__c,email__c,gender__c) VALUES ('$user_id','$baseStrings[0]','$baseStrings[1]','$baseStrings[2]','$baseStrings[3]')";
    $stmt = $pdo->query($sql);
    $init = new test;
    print("<br><br> _trigger_log class test: <br>------------------------<br>");
    print("<br>Log Start Time:<br><br>");
    $this->triggerLog = new TriggerLogResults;
    $this->triggerLog->logStartTime($pdo);
    print("<br><br>Log End Time:<br><br>");
    $this->triggerLog->logEndTime($pdo);
    print("<br><br>Log Time Processed in seconds:<br><br>");
    $this->triggerLog->totalTimeProcessed($pdo);
    print("<br><br>Log Details:<br><br>");
    $this->triggerLog->logResults($pdo);
    print("<br>--------------------------END HERE-------------------------<br>");
  }
  public function update($pdo, $tableName, array $baseStrings, $ids)
  {

    $sql = "UPDATE $tableName SET id='$ids',first_name__c='$baseStrings[0]',last_name__c='$baseStrings[1]',email__c='$baseStrings[2]',gender__c='$baseStrings[3]' WHERE id='$ids'";
    $stmt = $pdo->query($sql);
    $init = new test;
    print("<br><br> _trigger_log class test: <br>------------------------<br>");
    print("<br>Log Start Time:<br><br>");
    $this->triggerLog = new TriggerLogResults;
    $this->triggerLog->logStartTime($pdo);
    print("<br><br>Log End Time:<br><br>");
    $this->triggerLog->logEndTime($pdo);
    print("<br><br>Log Time Processed in seconds:<br><br>");
    $this->triggerLog->totalTimeProcessed($pdo);
    print("<br><br>Log Details:<br><br>");
    $this->triggerLog->logResults($pdo);
    print("<br>--------------------------END HERE-------------------------<br>");
  }
  public function delete($pdo, $tableName, $ids)
  {

    $sql = "DELETE FROM $tableName WHERE id='$ids'";
    $stmt = $pdo->query($sql);
    $init = new test;
    print("<br><br> _trigger_log class test: <br>------------------------<br>");
    print("<br>Log Start Time:<br><br>");
    $this->triggerLog = new TriggerLogResults;
    $this->triggerLog->logStartTime($pdo);
    print("<br><br>Log End Time:<br><br>");
    $this->triggerLog->logEndTime($pdo);
    print("<br><br>Log Time Processed in seconds:<br><br>");
    $this->triggerLog->totalTimeProcessed($pdo);
    print("<br><br>Log Details:<br><br>");
    $this->triggerLog->logResults($pdo);
    print("<br>--------------------------END HERE-------------------------<br>");
  }
  public function testStartTime($pdo)
  {
    $sql = "SELECT * FROM salesforce._trigger_log ORDER BY id DESC LIMIT 1";
    $stmt = $pdo->query($sql);
    while (($row = $stmt->fetch(PDO::FETCH_ASSOC)) !== false) {
      return print("Action: " . $row["action"] . " || " . $row["processed_at"]);
    }
  }
  public function logResults($pdo)
  {
    $sql = "SELECT * FROM salesforce._trigger_log ORDER BY id DESC LIMIT 1";
    $stmt = $pdo->query($sql);

    while (($row = $stmt->fetch(PDO::FETCH_ASSOC)) !== false) {
      return print("ID: " . $row["id"] . " || " . "Table Name: " . $row["table_name"] . " || " .
        "Action: " . $row["action"] . " || " . "State: " . $row["state"] . "<br>Values: " . $row["values"] . "<br>");
    }
  }
}
$tests = new test;
///////////////////////////////////////////////////CREATE//////////////////////////////////////////////////////////
$tests->create($pdo,'Salesforce.uzer__c',array('kael','mauro','last@gmail.com','male'));
///////////////////////////////////////////////////UPDATE//////////////////////////////////////////////////////////
// $tests->update($pdo,'Salesforce.uzer__c',array('test1','test1','test1','test1'),1651);
/////////////////////////////////////////////////DELETE//////////////////////////////////////////////////////////
// $tests->delete($pdo,'Salesforce.uzer__c',1649);
?>
<a class="nav-link" href="view.php">VIEW</a>