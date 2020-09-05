<?php

trait one{
	public function sample(){
		echo "Test from one trait.<br/>";
	}
}

trait two{
	public function sample(){
		echo "Test from two trait";
	}

}

class xyz{
	//use one, two;
	use one,two{
		one::sample insteadof two;
		two::sample as Twotest;  //if you want to use both methods which have same method name
	}
}

$obj = new xyz();
$obj->sample();
$obj->Twotest();