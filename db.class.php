<?php

class DB {

	private  $db = "";

	public function __construct($conf){
		$this->db = DBCONN::getDB($conf);
		if(empty($this->db)) mysql_select_db($conf['db'],$this->db);

	}


	public public function query($sql){
		$result = mysql_query();
		return $result;
	}



}