<?php

//Ex-1
class ABCD{

	public static $data = 'test';

	public static function xyz(){
		echo 'xyz function';
	}
}

//ABCD::xyz();
//echo ABCD::$data;

//Ex-2
class House{

	public static $size;

	public static function getSize(){
		return self::$size;
	}
	
	public static function setSize($s){
		self::$size = $s;
	}
}

House::setSize(2222*2);
echo House::getSize();

//Ex-3
//static variables are always related to class not objects.
class abc{

	public static $objectCount = 0;

	public function getCount(){
		return self::$objectCount;
	}

	public function __construct(){
		self::$objectCount++;
	}

}

class xyz extends abc{

	public function getCount(){
		parent::getCount();
		//echo 'hi';
		//new functionality

	}
}


// $a = new xyz;
// $b = new xyz;
// $c = new xyz;
// $d = new xyz;
// $e = new xyz;

// echo xyz::getCount();

