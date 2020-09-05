<?php

class Logger{

	public function log($m){
		echo "Logging message: $m";
	}
}

// $log = new Logger();
// $log->log('sssssssssss');

class Userprofile{

	private $logger;

	public function creatuser(){
		//$logger = new Logger();
		$this->logger->log('user created');
	}

	public function updateuser(){
		//$logger = new Logger();
		$this->logger->log('user updated');
	}

	public function deleteuser(){
		//$logger = new Logger();
		$this->logger->log('user deleted');
	}

	public function __construct(Logger $l){
		$this->logger = $l;
	}

}

$logger = new Logger();

$profile = new Userprofile($logger);
$profile->deleteuser();
