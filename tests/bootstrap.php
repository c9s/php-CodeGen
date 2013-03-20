<?php
require 'PHPUnit/TestMore.php';
require_once 'Universal/ClassLoader/BasePathClassLoader.php';
mb_internal_encoding('UTF-8');
error_reporting( E_ALL );
use Universal\ClassLoader\BasePathClassLoader;

define('ROOT',dirname(__DIR__));

$loader = new BasePathClassLoader(array(
    ROOT . '/src', 
    ROOT . '/vendor/pear',
));
$loader->useIncludePath(true);
$loader->register(true);
