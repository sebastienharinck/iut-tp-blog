<?php

//database credentials
define('DB_HOST', 'db'); //à modifier si vous utilisez "localhost"
define('DB_NAME', 'dm_name'); //à modifier
//define('DB_PORT', '5432'); //->Pas nécessaire
define('DB_USER', 'root');
define('DB_PASS', '');//root sur Linux/MAC, rien sur Windows

$db = new PDO('mysql:dbname='.DB_NAME.';host='.DB_HOST, DB_USER, DB_PASS);//Modifier "mysql" si vous utilisez un autre SGBD
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

require_once 'functions.php';
