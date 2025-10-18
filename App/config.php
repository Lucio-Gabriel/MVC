<?php

// Definido diretorios 
define('BASE_DIR', dirname(__FILE__, 2));
define('VIEWS', BASE_DIR . '/View');

// Config banco
$_ENV['db']['host'] = "localhost:3306";
$_ENV['db']['user'] = "gabdev";
$_ENV['db']['pass'] = "root";
$_ENV['db']['database'] = "biblioteca";