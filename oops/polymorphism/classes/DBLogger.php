<?php

class DBLogger implements LoggerInterface{

	public function log($m){
		echo "Logging message to DB: $m";
	}
}
