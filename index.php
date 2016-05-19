<?php
ini_set("display_errors", "On");
error_reporting(-1);
define('APPLICATION_PATH', dirname(__FILE__));

$application = new Yaf_Application( APPLICATION_PATH . "/conf/application.ini");

//Yaf_Registry::set('db',Yaf_Application::app->getConfig());
$application->bootstrap()->run();
?>
