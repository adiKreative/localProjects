<?php

class Userprofile{

	private $logger;

	public function createuser(){
		//$logger = new Logger();
		echo 'Creating User. <br>';
		$this->logger->log('user created');
	}

	public function updateuser(){
		//$logger = new Logger();
		echo 'Updating User. <br>';
		$this->logger->log('user updated');
	}

	public function deleteuser(){
		//$logger = new Logger();
		echo 'Deleting User. <br>';
		$this->logger->log('user deleted');
	}

	public function __construct(LoggerInterface $l){
		$this->logger = $l;
	}

}