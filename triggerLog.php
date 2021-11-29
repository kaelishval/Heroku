<?php include('config/db.php') ?>
<?php include('config/config.php') ?>
<?php

class TriggerLogResults
{

  public $sql = "SELECT * FROM salesforce._trigger_log ORDER BY id DESC LIMIT 1";

  public function logStartTime($pdo)
  {
    sleep(3);
    $stmt = $pdo->query($this->sql);
     while (($row = $stmt->fetch(PDO::FETCH_ASSOC)) !== false) {
      return print("Action: " . $row["action"] . " || " . "Start time: " . $row["created_at"]);
    }
  }

  public function logEndTime($pdo)
  {
    sleep(3);
    $stmt = $pdo->query($this->sql);
    while (($row = $stmt->fetch(PDO::FETCH_ASSOC)) !== false) {
      return print("Action: " . $row["action"] . " || " . "End time: " . $row["processed_at"]);
    }
  }

  public function totalTimeProcessed($pdo)
  {
    sleep(3);
    $stmt = $pdo->query($this->sql);
    while (($row = $stmt->fetch(PDO::FETCH_ASSOC)) !== false) {
      $processedTime = strtotime($row["processed_at"]);
      $createdTime = strtotime($row["created_at"]);
      $totalTime = $processedTime - $createdTime;
      $actualTime = $totalTime / 86400;
      return print($actualTime);
    }
  }

  public function logResults($pdo)
  {
    sleep(3);
    $stmt = $pdo->query($this->sql);
    while (($row = $stmt->fetch(PDO::FETCH_ASSOC)) !== false) {
      return print("ID: " . $row["id"] . " || " . "Table Name: " . $row["table_name"] . " || " .
        "Action: " . $row["action"] . " || " . "" .
        "State: " . $row["state"] . "<br>Values: " . $row["values"] . "<br>");
    }
  }
}
