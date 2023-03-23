<?php
require_once('connected.php');

$page = isset($_GET['pag']) && file_exists($_GET['pag']) . '.php' ? $_GET['pag'] : 'b1product';
include $page . '.php'
?>