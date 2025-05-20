<?php

require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';
require_once CONF . '/routes.php';

new \berry\App();
// \berry\App::$app->setProperty('test', 'test_value'); тест
// debug(\berry\App::$app->getProperties());
// throw new Exception('Страница не найдено:', 500);
// debug(\berry\Router::getRoutes());