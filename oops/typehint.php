<?php
// Type hinting

function hint_test( array $arr){
		$html = '';
		$html .= '<table>';
		$html .= '<tr><td>ID</td><td>Value</td></tr>';
	foreach ($arr as $key => $value) {
		$html .= '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';
	}	
		$html .= '</table>';
		echo $html;
}

$array = ['abc'=>'Adi', 'xyz'=> 'Suresh'];

hint_test($array);
echo '<br>';

class ABC{

	public function doSomething(){
		echo "Doing Something";
	}
}
class BCD{
	
	public function doSomethingElse(){
		echo "Doing Something Else";
	}

	// public function __construct(ABC $abc){
	// 	$this->abc = $abc;
	// }
}

function test(ABC $abc){
	$abc->doSomething();
}

$obj = new BCD;
test($obj);