<?php

require_once 'vendor/autoload.php';


define('ROOT_DIR', __DIR__);
define('PATH_BASE', '/index.php'); // ����·�ɵ���һ����path֮ǰ�����ݣ���ʹ��·�ɷ�תʱ��Ҫ
$config = require 'config.php';
$_ENV['_CONFIG'] = $config;
$path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';
$router = require 'routes.php';

echo $router->dispatch($path);
?>