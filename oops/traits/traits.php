<?php
//traits

class abc{
	public function test(){
		echo 'Test from class abc.<br/>';
	}	
}

trait test{
	public function test2(){
		echo 'Test2 method from test trait<br>';
	}
}

trait test2{
	public function test3(){
		echo 'Test3 method from test2 trait<br> ';
	}
}

class one extends abc{
	use test, test2;
}


class two extends abc{
	use test2;
	public function test3(){
		echo 'Test3 method from test2 trait sdgfsdfsdf<br> ';
	}
}


// $a = new one();
 $b = new two();

 //$a->test2();
// $a->test3();
$b->test3();
/*------------ method overriding traits ------------*/

class Base{

	public function abc(){
		echo 'ABC method from Base class<br>';
	}
}

trait Sample {
	public function abc(){
		echo 'ABC method from Sample trait<br>';
	}
}

class Child extends Base{

	use Sample; //higest priority if used in a child class
	
	// public function abc(){
	// 	echo 'ABC method from Child Class<br>';
	// }
}

// $child = new Child();
// $child->abc();