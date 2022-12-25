<?php

class DB {
	private static $writeDbConnection;
	private static $readDbConnection;

	//singleton
	public static function connectWriteDb(){
		if(self::$writeDbConnection === null){
			self::$writeDbConnection = new PDO('mysql:host=mariadb;dbname=camagru;charset=utf8;',
											 'root',
											 '1234');
			self::$writeDbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$writeDbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		}

		return self::$writeDbConnection;
	}

	public static function connectReadDb(){
		if(self::$readDbConnection === null){
			self::$readDbConnection = new PDO('mysql:host=mariadb;dbname=camagru;charset=utf8;',
											 'root',
											 '1234');
			self::$readDbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$readDbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		}

		return self::$readDbConnection;
	}
}
