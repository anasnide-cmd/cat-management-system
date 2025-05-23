<?php
require_once __DIR__.'/../app/bootstrap.php';

use App\Controllers\CatController;

$controller = new CatController();
$controller->index();
?>
