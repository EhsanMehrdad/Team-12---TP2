
<?php
require_once 'basket2.php';
    $db = new sqli("localhost","u_210117037","cmBtY3bT9N7ddiV","u_210117037_team_project_2");
    if ($db->connect_errno()){
	printf("Connect failed: %s\n", $db->connect_error);
	die();
	}
?>

