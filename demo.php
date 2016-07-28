<?php

include_once "dbconn.class.php";
include_once "db.class.php";
$conf = ['host'=>'localhost','name'=>'root','password'=>'zhuzhu','db'=>'3dgif'];
$db = new DB($conf);
$sql = "select * from gifs";
$res = $db->query($sql);




var_dump($res);



?>
