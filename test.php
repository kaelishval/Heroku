<?php
class test {

private $str = NULL;

public function newTest($user_id, $first_name,$last_name,$email,$gender){

    
   $sql = "INSERT INTO users (userid,firstname,lastname,email,gender) VALUES ('$user_id','$first_name','$last_name','$email','$gender')";
   $stmt = $pdo->prepare($sql);
   $stmt->execute();
  
   print_r ($sql);
    
}
public function bigTest(){

    return $this->str . ' function "bigTest" called,';
}
public function smallTest(){

    return $this->str . ' function "smallTest" called,';
}
public function scoreTest(){

    return $this->str . ' function "scoreTest" called,';
}
}

$test = new test;

echo $test->newTest('1','test1','test1','test1','test1');

?>