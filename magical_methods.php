<?php
class Test {
    
    //private $value1;
    //private $value2;
    
    function __construct(){
       
    }
    
    function __get($name){
       return $this->$name;
    }
    
    function __set($name , $value){
       $this->$name = $value;
    }
    
    function __isset($name){
       return isset($this->$name);
    }
    
    function __unset($name){
       unset($this->$name);
    }
    
    function __toString(){
       return "cghfg";
    }
    
    function __invoke(){
       return "";
    }
	
	function __call($name , $value){
		echo "</br>Name:- ".$name."</br>";
		echo "</br>Value:- ";print_r($value);echo "</br>";
	}
	
	static function __callStatic($name , $value){
		echo "</br>Static Name:- ".$name."</br>";
		echo "</br>Value:- ";print_r($value);echo "</br>";
	}
	
	function firsttest($name , $value){
		echo "</br>firsttestmethod</br>";
	}
	
	function secondtest($name , $value){
		echo "</br>secondtestmethod</br>";
	}
}

$class = new Test();

$class->value2  = "wer";
echo $class->value2;

var_dump(isset($class->value2));
unset($class->value2);
var_dump(isset($class->value2));

echo $class;
$class->firsttest('magicfirst' , '1');
$class->thirdtest('magicthird');
$class->fourthtest('magicfourth');
$class->secondtest('magicsecond' , '2');
Test::thirdtest('staticthird');
Test::fiveonearraytest(array('staticfive'));
Test::fivetwoarraytest(array('staticfive' , 'ddd'));
Test::fivecommaatest('staticfive' , 'ddd' , 'ffff');
Test::fivecommaatest('staticfive' , 'ddd');
$class->thirdtest('magicthirdlulu');
?>