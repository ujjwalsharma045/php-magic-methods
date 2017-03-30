<?php
class Test {
    function __construct(){
       echo "Class Name-".__CLASS__;
       echo "</br>Class Method-".__METHOD__;
       echo "</br>Line No-".__LINE__;
       echo "</br>Directory Path-".__DIR__;
       echo "</br>File Path-".__FILE__;
       echo "</br>Function Name-".__FUNCTION__;
       echo "</br>Trait-".__TRAIT__;
       echo "</br>Name Space-".__NAMESPACE__;
       echo "</br>Trait-".__TRAIT__;
       echo "</br>Curent Trait-".__TRAIT__;
    }   
    
    function test(){
        echo "</br>Class Method-".__METHOD__;
    }
}

$childClass = new Test;
$childClass->test();
echo "<br/>Object Class-".get_class($childClass);
?>