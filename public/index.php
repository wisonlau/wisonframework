<?php
define('WISON_PATH', dirname(__DIR__));
require_once(WISON_PATH . '/vendor/autoload.php');
require_once(WISON_PATH . '/core/wison.php');

$app = new core\wison();
$app->run();
