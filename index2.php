<?php

$url = parse_url(getenv("DATABASE_URL"));
$dsn = sprintf("pgsql:host=%s;dbname=%s", $url["host"], substr($url["path"], 1));
$pdo = new PDO($dsn, $url["user"], $url["pass"]);
print("DB Server Version:<br>");
print_r($pdo->getAttribute(PDO::ATTR_SERVER_VERSION));

class TriggerLogResults
{
  public function testStartTime($pdo)
  {
    $sql = "SELECT * FROM salesforce._trigger_log ORDER BY id DESC LIMIT 1";
    $stmt = $pdo->query($sql);
    foreach ($stmt as $row) {
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

print("<br><br> _trigger_log class test:<br>------------------------<br>");
$triggerLog = new TriggerLogResults;
print("<br>Time triggered:<br><br>");
$triggerLog->testStartTime($pdo);
print("<br><br>Test Details:<br><br>");
$triggerLog->logResults($pdo);

// $sql = "SELECT relname AS table_name FROM pg_stat_user_tables";
// $stmt = $pdo->query($sql);
// $tables = $stmt->fetchAll(PDO::FETCH_COLUMN);
// print("<br><br>Tables:<br>");
// print_r($tables);

// print("<br><br>Broker__c:<br>Name (Email)<br>------------------------<br>");
// $sql = "SELECT * FROM salesforce.broker__c";
// $stmt = $pdo->query($sql);
// foreach ($stmt as $row) {
//   print($row["name"] . " (" . $row["email__c"] . ")<br>");
// }

// print("<br><br>_hc_lastop from broker__c:<br>------------------------<br>");
// $sql = "SELECT * FROM salesforce.broker__c";
// $stmt = $pdo->query($sql);
// foreach ($stmt as $row) {
//   print("ID: " . $row["id"] . " || " .
//     "name: " . $row["name"] . " (" .
//     "email: " . $row["email__c"] . ") || " .
//     $row["_hc_lastop"] . "<br>");
// }

// print("<br><br>_hc_lastop from user_list:<br>------------------------<br>");
// $sql = "SELECT * FROM user_list";
// $stmt = $pdo->query($sql);
// foreach ($stmt as $row) {
//   print("ID: " . $row["id"] . " || " .
//     "name: " . $row["name"] . " ||" .
//     $row["_hc_lastop"] . "<br>");
// }

// print("<br><br> _trigger_log:<br>------------------------<br>");
// $sql = "SELECT * FROM salesforce._trigger_log";
// $stmt = $pdo->query($sql);
// foreach ($stmt as $row) {
//   print("ID: " . $row["id"] . " || " .
//     "table_name: " . $row["table_name"] . " || " .
//     "action: " . $row["action"] . " || " .
//     "state: " . $row["state"] . "<br>");
// }

// print("<br><br> LATEST _trigger_log:<br>------------------------<br>");
// $sql = "SELECT * FROM salesforce._trigger_log ORDER BY id DESC LIMIT 1";
// $stmt = $pdo->query($sql);
// foreach ($stmt as $row) {
//   print("ID: " . $row["id"] . " || " .
//     "table_name: " . $row["table_name"] . " || " .
//     "action: " . $row["action"] . " || " .
//     "state: " . $row["state"] .
//     "<br>Values: " . $row["values"] . "<br>");
// }

print("<br>--------------------------END HERE-------------------------");


// class AggregatingTestResults {
//   function __construct() {
//       // Record the test start time
//   }
//   function aggregate() {
//       // Parse _trigger_log table
//       return $result
//   }
// }
