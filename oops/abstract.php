<?php 

// class ABC{

// 	public abstract function xyz();

// }

// class DEF extends ABC{

// 	public function xyz(){
// 		echo 'HEllo';
// 	}
// }

abstract class BaseEmployee{

	protected $fname;
	protected $lname;

	public function getName(){
		return $this->fname.' '.$this->lname;  
	}

	public abstract function getMonthlySal();

	public function __construct($f, $l){
		$this->fname = $f;
		$this->lname = $l;
	}

}

class FullTimeEmployee extends BaseEmployee{

	protected $annualSal;

	public function getMonthlySal(){
		return $this->annualSal / 12;
	}


}

class ContractEmployee extends BaseEmployee{

	protected $hourlyRate;
	protected $totalHrs;
	protected $sal;

	public function getMonthlySal(){
		return $this->hourlyRate * $this->totalHrs;  
	}
	public function get(){
		return $this->sal * 2;  
	}
	public function __construct($f, $l, int $s){
		parent::__construct($f, $l);
		$this->sal = $s;

	}

}

$fulltime = new FullTimeEmployee('Fulltime', 'Employee');
$contract_time = new ContractEmployee('Contract', 'Employee', 23 );
//$baseemp = new BaseEmployee('Base', 'Employee');
//echo $baseemp->getName();

echo $fulltime->getName();
echo $contract_time->getName().'<br>';

echo $fulltime->getMonthlySal();
echo $contract_time->getMonthlySal().'<br>';

echo $contract_time->get().'<br>';

