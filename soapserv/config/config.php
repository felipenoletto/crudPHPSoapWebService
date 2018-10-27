<?php

	define("HOST", "localhost");
	define("USER", "root");
	define("PASS", "");
	define("DBNAME", "crudsoap");

	class DB {

		private static $instance;

		public static function getInstance() {

			if(!isset(self::$instance)) {

				try {
					self::$instance = new PDO("mysql:host=".HOST.";dbname=".DBNAME, USER, PASS);
					self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				} catch(PDOException $e) {
					echo $e->getMessage();
				}

				return self::$instance;
			}

		}

		public static function prepare($sql) {
			return self::getInstance()->prepare($sql);
		}

	}

?>