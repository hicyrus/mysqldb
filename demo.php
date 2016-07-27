<?php

include_once "db.class.php";

$db = DB::getDb(['host'=>'localhost','name'=>'root','password'=>'zhuzhu']);

var_dump($db);

?>