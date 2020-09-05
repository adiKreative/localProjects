<?php
trait abc{
	private function test(){
		echo "Test form trait ABC.";
	}
}

class Sample{
	//use abc;
	use abc{
		abc::test as public;
	}
}

$obj = new Sample;
$obj->test();