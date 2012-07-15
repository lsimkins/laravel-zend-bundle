<?php

/**
 * This file is a part of Zend Framework.
 * Copyright (c) 2005-2010, Zend Technologies USA, Inc.
 * All rights reserved.
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
  * See Zend Framework Performance Guide at:
  * http://framework.zend.com/manual/1.11/en/performance.classloading.html
  */

set_include_path(implode(PATH_SEPARATOR, array(
    __DIR__ . '/library',
    get_include_path(),
)));

require_once Bundle::path('zend') . '/library/Zend/Loader/Autoloader.php';

$autoloader = Zend_Loader_Autoloader::getInstance();
