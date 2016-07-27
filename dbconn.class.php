<?php

final class DBCONN {

	public static $db = "";
	public static function getDb($conf = null){
		if(empty($conf)) return null;
		if(empty(self::$db)){
			self::$db = mysql_connect($conf['host'],$conf['name'],$conf['password']);
			return self::$db;
		}
		return self::$db ;
	}

	


}