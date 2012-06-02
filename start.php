<?php

set_include_path(implode(PATH_SEPARATOR, array(
    __DIR__ . '/library',
    get_include_path(),
)));

 require_once Bundle::path('zend') . '/library/Zend/Loader/Autoloader.php';

$autoloader = Zend_Loader_Autoloader::getInstance();
