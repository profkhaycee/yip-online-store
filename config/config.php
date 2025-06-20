<?php
session_start();

require_once '../vendor/autoload.php';
require_once '../core/Database.php';

$smarty = new Smarty\Smarty();
$smarty->setTemplateDir('../app/views/');
$smarty->setCompileDir('../smarty/templates_c/');
$smarty->setCacheDir('../smarty/cache/');

$GLOBALS['smarty'] = $smarty;

define('DB_HOST', 'localhost');
define('DB_USER', 'test');
define('DB_PASSWORD', '');
define('DB_NAME', 'yip_store');


