<?php

class DB {

	private  $db = "";

	public function __construct($conf)
	{
		$this->db = DBCONN::getDB($conf);
	}




}