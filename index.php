<?php
//phpinfo();
//echo 'hello xifanshi';exit;

// change the following paths if necessary
$yii = dirname(__FILE__).'/lib/framework/yii.php';
$config = dirname(__FILE__).'/protected/config/main.php';

// remove the following line when in production mode

//ini_set('display_errors', 'On');
//error_reporting(E_ALL & ~E_NOTICE);


defined('YII_DEBUG') or define('YII_DEBUG',true);

require_once($yii);
Yii::createWebApplication($config)->run();
