<?php
class TV{
	
	private $volume;
	protected $model;

	public function volumeUp(){
		$this->volume++;
	}

	public function volumeDown(){
		$this->volume--;
	}

	protected function getModel(){
		return $this->model;
	}

	public function __construct($m, $v){
		$this->model = $m;
		$this->volume = $v;
		
	}
}

class plasma extends TV{ 

	public function getModel(){
		return $this->model;	 
	}
}

$test = new TV('abc', 1);
$plasma = new plasma('abc',1);

   //echo $test->model = 'xyz';
  // echo $plasma->getModel();
  // echo $plasma->model;

  echo $plasma->getModel();
  echo $plasma->volume = 4;
 
