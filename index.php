<?php

require 'library/util/Autoloader.php';

use library\controller\FrontController;
use library\db\factory\Db;
use library\orm\Mapper;
use library\util\Autoloader;

set_include_path(__DIR__ . PATH_SEPARATOR . get_include_path());

$autoloader = Autoloader::getInstance();

$config = parse_ini_file(__DIR__ . DIRECTORY_SEPARATOR . 'config.ini');

$adapter = Db::getFactory($config)->factory();

Mapper::$defaultAdapter = $adapter;

$frontController = FrontController::getInstance();
$frontController->setPath(__DIR__ . DIRECTORY_SEPARATOR . 'application' .
        DIRECTORY_SEPARATOR . 'view');

$frontController->dispatch();
