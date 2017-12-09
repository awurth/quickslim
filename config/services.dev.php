<?php

use Monolog\Logger;

$config = require $app->getConfigurationDir().'/services.php';

$config['twig']['assets']['base_path']    = '..';
$config['twig']['options']['debug']       = true;
$config['twig']['options']['auto_reload'] = true;

$config['monolog']['level'] = Logger::DEBUG;

return $config;