<?php

class DB {

	private  $db = "";

	public function __construct($conf){
		$this->db = DBCONN::getDB($conf);
		if(empty($this->db)) mysql_select_db('3dgif',$this->db);

	}

	public function query($sql){
		$result = mysql_query($sql,$this->db);
		if(empty($result)){

		}
			echo mysql_errno().mysql_error();
		return $result;
	}


}