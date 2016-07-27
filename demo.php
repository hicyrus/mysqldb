<?php

include_once "db.class.php";

$db = DB::getDb(['host'=>'localhost','name'=>'root','password']);

var_dump($db);