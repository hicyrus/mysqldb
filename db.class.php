<?php

class DB {

	private  $db = "";

	public function __construct($conf){
		$this->db = DBCONN::getDB($conf);
		if(!empty($this->db)) mysql_select_db('3dgif',$this->db);

	}

	public function query($sql){
		$ret = mysql_query($sql,$this->db);
		$result = [];
		if(!empty($ret)){
			
			while ($row = mysql_fetch_array($ret,MYSQL_ASSOC)) {
				$result[] = $row;
			}
		}
		return $result;
	}


}