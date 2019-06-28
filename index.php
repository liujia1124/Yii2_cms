<?php

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
defined('ROOT_PATH') or define('ROOT_PATH',  __DIR__);

require ROOT_PATH . '/vendor/autoload.php';
require ROOT_PATH . '/vendor/yiisoft/yii2/Yii.php';

$config = require ROOT_PATH . '/config/web.php';
$app = new \yii\web\Application($config);
$app->run();
