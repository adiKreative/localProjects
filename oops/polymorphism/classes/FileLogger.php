<?php

class FileLogger implements LoggerInterface{

	public function log($m){
		echo "Logging message to file: $m";
	}
}