<?php
class Test {
    function __construct(){
       echo "<br/>It's is Test Class Constructer";
    }   
  
    function __destruct(){
       echo "<br/>It's is Test Class Destructer";
    }    
}

class Test2 extends Test {
    function __construct(){
       parent::__construct();
       echo "<br/>It's is Test2 Class Constructer";
    }
  
    function __destruct(){
       echo "<br/>It's is Test2 Class Destructer";
    }
}

echo "Calling Via Parent Class";
$baseClass = new Test;

echo "<br/><br/>Calling Via Child Class";
$childClass = new Test2;
?>