<?php
require_once('connected.php');

<<<<<<< HEAD:kwajo.php
$page = isset($_GET['page']) && file_exists($_GET['page']) . '.php' ? $_GET['page'] : 'index';
include $page . '.php';
=======
$page = isset($_GET['pag']) && file_exists($_GET['pag']) . '.php' ? $_GET['pag'] : 'b1product';
include $page . '.php'
>>>>>>> 87158f82b3b01a97df502bd0130af4d48fe2fc19:indiproduct/kwajo.php
?>