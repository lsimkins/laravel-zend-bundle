<?php

set_include_path(__DIR__ . '/library');

require_once Bundle::path('zend') . '/library/Zend/Loader/Autoloader.php';

$autoloader = Zend_Loader_Autoloader::getInstance();
