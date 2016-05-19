<?php
class Db {
	protected static $conf;
	protected static $instance;
	public function __construct($db_config) {
		self::$conf = $db_config;	
		self::getInstance();
	}
	
	public function getInstance() {

		if(empty(self::$instance[self::$conf['type']])) {
			if(empty(self::$conf)) {
				throw new exception_db('database conf is not exist',exception_db::type_server_not_exist);
			}
			
			$driverType = self::$conf['type'];
			$driverClass = 'db_'.$dirverType;

			if(!class_exists($driverClass)) {
				throw new exception_db('database driver is not exist',exception_db::type_driver_not_exist);
			}

			$instance = new $driverClass(self::$conf);
		}

		return self::$instance[self::$conf['type']]; 
		
	}
}
