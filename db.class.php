<?php

class DB {

	private  $db = "";

	public function __construct()
	{
		$this->db = DBCONN::getDB();
	}




}