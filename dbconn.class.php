<?php

final class DBCONN {

	public static $db = "";
	public static function getDb($conf = null){
		if(empty($conf)) return null;
		if(empty(DB::$db)){
			DB::$db = mysql_connect($conf['host'],$conf['name'],$conf['password']);
			return DB::$db;
		}
		return DB::$db ;
	}

	


}