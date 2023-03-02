<?php
require_once 'basket2.php';
    $db = new sqli("localhost","u_200219998","eQkPde3XGHj3Rxr","u_200219998_db");
    if ($db->connect_errno()){
	printf("Connect failed: %s\n", $db->connect_error);
	die();
	}
?>