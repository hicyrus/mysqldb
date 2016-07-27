<?php

include_once "dbconn.class.php";
include_once "db.class.php";
$conf = ['host'=>'localhost','name'=>'root','password'=>'zhuzhu'];
$db = new DB($conf);
var_dump($db);

?>
