<?php
require_once('connected.php');

$page = isset($_GET['page']) && file_exists($_GET['page']) . '.php' ? $_GET['page'] : 'index';
include $page . '.php';
?>