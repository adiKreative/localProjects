<?php

interface ABC{
	//public $data;  // Does not include member variables
	//Interface doesnot provide private or protected method
	
	public function test();
	public function xyz();
}

interface LAP{
	public function test2();
}

class DEF implements ABC, LAP{
	// Interface can be use as multiple inheritance purpose whereas Abstraction doesnot provide this feature.

	public function test(){
		echo 'hello';
	}

	public function xyz(){
		echo 'xyz www';
	}

	 public function test2(){
	 	echo 'test22';
	}

}

$test = new DEF();
echo $test->test();