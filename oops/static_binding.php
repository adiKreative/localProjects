<?php

// static $abc = 'I am good';

// echo $abc;

class DB{

	protected static $table = 'student';

	public static function select() {
		echo 'SELECT * FROM '.static::$table;
	}

	public static function insert() {
		echo 'INSERT INTO '.static::$table;
	}

}

class abc extends DB
{
	protected static $table = 'abc';
	
}

class user extends DB
{
	protected static $table = 'user_accounts';
	
}

$acc = new user();
$abc = new abc();

$acc->select();
$abc->select();
