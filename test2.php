<?php

/**
 * The wrapper class to execute the Heroku Connect testing with the simple DB process codes.
 * The methods c, u and d have the interface the same as Apex's one so that
 * we get simplicity of development because of the design symmetry.
 *
 * Target table structure is as below:
 * Table name: HerokuConnectTest_n (n = 0, 1, 2, ...)
 * Column name: F_n (n = 0, 1, 2, ...)
 * Each data type: All text
 *
 * @author
 */
class DBProcessingWrapper
{
  /**
   * Create records method
   *
   * @param int $tableNameIndex
   * @param string[] $baseStrings The value of the field will be created based on this string
   * @return string[] Array of "sfid"s of created records. Length must
   * be equal to $recordNum. "sfid" is a 12-digit string
   */

  public function c($tableNameIndex, $baseStrings)
  {
    
    // 1. Make table name string using $tableNameIndex
    // 2. Get number of colums
    // 3. Create each field values following the rules below
    //
    // For example, when $recordNum=2, $baseString=["foo", "bar"] and number
    // of colums is 3.
    // Records to be created are
    //      F_0    F_1    F_2
    // #1   foo_0  foo_1  foo_2
    // #2   bar_0  bar_1  bar_2
    //
    for($i = 0; $i < 10;$i++){
      $array[i] = "$tableNameIndex + $baseStrings <br>";
      echo $array[i];
    }
    
    
    // 1. Return IDs of created records
  }

  /**
   * Update records method
   *
   * @param int $tableNameIndex The integer number to identify the table name
   * @param string[] $baseStrings Length must be equal to length of $ids. The
   * value of the field will be updated based on this string
   * @param string[] $ids Array of "sfid"s of records to update
   * @return void
   */
  public function u($tableName, $baseStrings, $ids)
  {
    // 1. Make table name string using $tableNameIndex
    // 2. Get number of colums
    // 3. Update each field values following the rules below
    //
    // For example, when length of $ids is 2, $baseString=["buz", "qux"] and number of colums is 3,
    // Records to be updated are
    // ID        F_0    F_1    F_2
    // $sfid[1]  buz_0  buz_1  buz_2
    // $sfid[2]  qux_0  qux_1  qux_2
  }

  /**
   * Delete records method
   *
   * @param int $tableNameIndex
   * @param string[] $ids Array of "sfid"s of records to delete
   * @return void
   */
  public function d($tableName, $ids)
  {
    // 1. Make table name string using $tableNameIndex
    // 2. Delete records determined by $tableName and $ids   
    $sql = "DELETE FROM $tableName WHERE id='$regValue'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(); 
  }

}

$test = new DBProcessingWrapper;

$test->c(10,'awdawd');

?>
