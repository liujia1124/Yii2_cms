<?php

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
defined('ROOT_PATH') or define('ROOT_PATH',  __DIR__);

defined('HOME_PATH') or define('HOME_PATH', ROOT_PATH.DIRECTORY_SEPARATOR.'modules'.DIRECTORY_SEPARATOR.'home'.DIRECTORY_SEPARATOR);
defined('ADMIN_PATH') or define('ADMIN_PATH', ROOT_PATH.DIRECTORY_SEPARATOR.'modules'.DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR);

require ROOT_PATH . '/vendor/autoload.php';
require ROOT_PATH . '/vendor/yiisoft/yii2/Yii.php';

$config = require ROOT_PATH . '/config/web.php';
$app = new \yii\web\Application($config);
$app->run();
