<?php include('config/db.php') ?>
<?php include('config/config.php') ?>
<?php

class TriggerLogResults
{

  public $sql = "SELECT * FROM salesforce._trigger_log ORDER BY id DESC LIMIT 1";

  public function logStartTime($pdo)
  {

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
      $processedTime = array();
      $processedTime = explode(":", $row['processed_at']);
      $processedAt = array();
      $processedAt = explode("+", $processedTime[2]);
      $createdTime = array();
      $createdTime = explode(":", $row['created_at']);
      $createdAt = array();
      $createdAt = explode("+", $createdTime[2]);
      $totalTimeProcessed = floatval($processedAt[0]) - floatval($createdAt[0]);
      return print(number_format($totalTimeProcessed, 3));
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
