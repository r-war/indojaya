<?php

#error_reporting(E_ERROR | E_WARNING | E_PARSE);

error_reporting(E_ERROR);

#error_reporting(-1);


require 'vendor/autoload.php';

define('BASE_PATH', __DIR__ . '/' );

include(BASE_PATH.'init.php');

include_once( Attributes::CORE_CLASS_PATH . 'Application.php');

$oApplication = Application::getInstance();

$oApplication->start();

$oApplication->process();

?>