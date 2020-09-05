<?php 

spl_autoload_register(function ($class_name) {
    include_once "classes/$class_name.php";
});

function getLogger($type){
	switch ($type) {
		case 'file':
			return new FileLogger();
			break;
		case 'database':
			return new DBLogger();
			break;
		default:
			return false;
			break;
	}
}

$logger  = getLogger('database');

$profile = new Userprofile($logger); 
$profile->createuser();
?>