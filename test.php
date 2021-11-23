<?php include ('config/db.php')?>
<?php include ('config/config.php')?>
<?php
class test {

private $str = NULL;

public function create($tableName , array $baseStrings){

    
   $sql = "INSERT INTO $tableName (userid,firstname,lastname,email,gender) VALUES ('$baseStrings[0]','$baseStrings[1]','$baseStrings[2]','$baseStrings[3]','$baseStrings[4]')";
   $stmt = $pdo->prepare($sql);
   $stmt->execute();
  
   print_r ($sql);

   if($stmt->execute()){

    echo "Success";

    }

    echo "Error";
    
}
public function update($tableName,array $baseStrings, $ids){

    $sql = "UPDATE $tableName SET firstname='$baseStrings[0]',lastname='$baseStrings[1]',email='$baseStrings[2]',gender='$baseStrings[3]' WHERE id='$ids'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
   
    print_r ($sql);
    // echo "$tableName";
    // echo "$baseStrings[0],$baseStrings[1],$baseStrings[2],$baseStrings[3]";
    // echo "$ids";
}
public function delete($tableName,$ids){

    $sql = "DELETE FROM $tableName WHERE id='$ids'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();  

    print_r ($sql);
}
}

$test = new test;

$test->create('users',array('1','test1','test1','test1','test1'));

// $test->update('users',array('test2','test3','test2','test2'),1);

// $test->delete('users','1');

?>