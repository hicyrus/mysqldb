<?php

class DB {

	public static $db = "";

	public static function getDb($conf = null){
		if(empty($conf)) return null;

		if(empty($this->db))
		{
			$this->db = mysql_connect($conf['host'],$conf['name'],$conf['password']);

			return $this->db;
		}

		return $this->db ;
	}

	
}